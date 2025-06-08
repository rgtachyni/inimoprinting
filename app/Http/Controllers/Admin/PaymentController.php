<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
// use App\Models\paymentTransaksi;
use Illuminate\Http\Request;
use Midtrans\Config;
use App\Models\Cart;
use App\Models\User;
use App\Models\paymentTransaksi;
use Illuminate\Support\Facades\Auth;
use Midtrans\Snap;
use Illuminate\Support\Str;

class PaymentController extends Controller
{

    public function process(Request $request)
    {
        $data = $request->all();

        $cartIds = $data['cart_id'];
        $orderid = uniqid();
        $metodePembayaran = $data['jenis_transaksi'] ?? null;
        $urgensi = $data['urgensi'];


        $carts = Cart::with('produk')->whereIn('id', $cartIds)->get();
        $baseTotal = $carts->sum(function ($item) {
            return $item->produk->harga * $item->jumlah;
        });
        if ($urgensi === 'express') {
            $grandTotal = $baseTotal + ($baseTotal * 0.05); // Tambah 5%
        } else {
            $grandTotal = $baseTotal;
        }


        $transaction = paymentTransaksi::create([
            'user_id' => Auth::user()->id,
            'order_id' => $orderid,
            // 'total_price' => $data['amount'],
            'total_price' => round($grandTotal),
            'status' => 'pending',
            'urgensi' => $urgensi,
            // 'urgensi' => $data['urgensi'] ?? 'normal',
            'metode_pembayaran' => $metodePembayaran
        ]);



        $transaction->carts()->attach($cartIds);
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = config('midtrans.isProduction');
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                // 'order_id' => rand(),
                'order_id' => $orderid,
                'gross_amount' => $data['amount'],
            ),
            'customer_details' => array(
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ),
            'notification_url' => route('paymentNotification')
        );

        // $snapToken = \Midtrans\Snap::getSnapToken($params);
        $snapToken = Snap::getSnapToken($params);
        $transaction->snap_token = $snapToken;
        $transaction->save();

        return redirect()->route('checkout', $transaction->id);
    }

    // public function process(Request $request)
    // {
    //     $data = $request->all();
    //     // $cartIds = implode(',', $data['cart_id']);
    //     $cartIds = $data['cart_id'];
    //     $orderid = uniqid();
    //     $metodePembayaran = $data['jenis_transaksi'] ?? null;
    //     dd($data);
    //     $transaction = paymentTransaksi::create([
    //         'user_id' => Auth::user()->id,
    //         'order_id' => $orderid,
    //         'total_price' => $data['amount'],
    //         'urgensi' => $data['urgensi'],
    //         'status' => 'pending',
    //         'metode_pembayaran' => $metodePembayaran
    //     ]);

    //     $transaction->carts()->attach($cartIds);
    //     // Set your Merchant Server Key
    //     \Midtrans\Config::$serverKey = config('midtrans.serverKey');
    //     \Midtrans\Config::$isProduction = config('midtrans.isProduction');
    //     \Midtrans\Config::$isSanitized = true;
    //     \Midtrans\Config::$is3ds = true;

    //     $params = array(
    //         'transaction_details' => array(
    //             // 'order_id' => rand(),
    //             'order_id' => $orderid,
    //             'gross_amount' => $data['amount'],
    //         ),
    //         'customer_details' => array(
    //             'first_name' => Auth::user()->name,
    //             'email' => Auth::user()->email,
    //         ),
    //         'notification_url' => route('paymentNotification')
    //     );

    //     // $snapToken = \Midtrans\Snap::getSnapToken($params);
    //     $snapToken = Snap::getSnapToken($params);
    //     $transaction->snap_token = $snapToken;
    //     $transaction->save();

    //     return redirect()->route('checkout', $transaction->id);
    // }

    public function checkout(paymentTransaksi $transaction)
    {
        $carts = Cart::with('produk')->where('user_id', Auth::id())
            ->where('status', 'dipilih')
            ->get();

        $transaction = paymentTransaksi::findOrFail($transaction->id);

        $total = $transaction->total_price;

        return view('app.cart.checkout', compact('carts', 'transaction', 'total'));
    }

    public function paymentNotification(Request $request)
    {
        $notif = new \Midtrans\Notification();

        $order_id = $notif->order_id;
        dump($order_id);
        $transaction = paymentTransaksi::where('order_id', $order_id)->first();
        dd($transaction);
        // dd($notif);
        if ($transaction) {
            $transaction->status = $notif->transaction_status;
            $transaction->metode_pembayaran = $notif->payment_type;  // dapat dari Midtrans
            $transaction->save();
        }
    }


    public function success(PaymentTransaksi $transaction)
    {
        $transaction->status = 'success';
        $transaction->save();

        Cart::where('user_id', Auth::id())
            ->where('status', 'dipilih')
            ->update(['status' => 'success']);
        // ->delete();


        session()->flash('success', 'PEMBAYARAN BERHASIL');
        return redirect()->route('sedangProses', $transaction->id);
    }

    public function pending(PaymentTransaksi $transaction)
    {
        $transaction->status = 'pending';
        $transaction->save();

        Cart::where('user_id', Auth::id())
            ->where('status', 'dipilih')
            ->update(['status' => 'pending']);
        // ->delete();

        session()->flash('pending', 'Silahkan membayar pesanan');
        return redirect()->route('belumBayar', $transaction->id);
    }
}
