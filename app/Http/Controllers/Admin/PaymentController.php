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
        $cartIds = implode(',', $data['cart_id']);

        $transaction = paymentTransaksi::create([
            'user_id' => Auth::user()->id,
            'order_id' => rand(),
            'total_price' => $data['amount'],
            'cart_id' => $cartIds,
            'status' => 'pending',
        ]);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = config('midtrans.isProduction');
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $data['amount'],
            ),
            'customer_details' => array(
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ),
        );

        // $snapToken = \Midtrans\Snap::getSnapToken($params);
        $snapToken = Snap::getSnapToken($params);
        $transaction->snap_token = $snapToken;
        $transaction->save();

        return redirect()->route('checkout', $transaction->id);
    }

    public function checkout(paymentTransaksi $transaction)
    {
        $carts = Cart::with('produk')->where('user_id', Auth::id())->get();
        // $transactions = paymentTransaksi::where('user_id', Auth::id())->get();
        // dd($transaction);
        $transaction = paymentTransaksi::findOrFail($transaction->id);

        $total = $transaction->total_price;
        // dd($transaction);
        return view('app.cart.checkout', compact('carts', 'transaction', 'total'));
    }




    public function success(PaymentTransaksi $transaction)
    {
        $transaction->status = 'success';
        $transaction->save();

        Cart::where('user_id', Auth::id())
            ->where('status', 'dipilih') // atau sesuaikan dengan status sebelumnya
            ->update(['status' => 'berhasil']);


        session()->flash('success', 'PEMBAYARAN BERHASIL');
        return redirect()->route('sedangProses', $transaction->id);
    }

    public function pending(PaymentTransaksi $transaction)
    {
        $transaction->status = 'pending';
        $transaction->save();

        Cart::where('user_id', Auth::id())
            ->where('status', 'dipilih') // atau sesuaikan dengan status sebelumnya
            ->update(['status' => 'pending']);

        session()->flash('pending', 'Silahkan membayar pesanan');
        return redirect()->route('belumBayar', $transaction->id);
    }


    // public function notificationHandler(Request $request)
    // {
    //     $notif = new \Midtrans\Notification();

    //     $transaction = paymentTransaksi::where('order_id', $notif->order_id)->first();

    //     if ($notif->transaction_status == 'settlement') {
    //         $transaction->status = 'success';
    //         $transaction->save();

    //         // Hapus keranjang user
    //         Cart::where('user_id', $transaction->user_id)->delete();
    //     }
    // }
}
