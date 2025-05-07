<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\paymentTransaksi;
use Illuminate\Http\Request;
use Midtrans\Config;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Midtrans\Snap;
use Str;

class PaymentController extends Controller
{

    public function createCharge(Request $request)
    {

        $data = $request->all();

        $unique_id = 'ORD-' . strtoupper(str::random(8));

        $transaction = paymentTransaksi::create([
            'user_id' => Auth::user()->id,
            'order_id' => $unique_id,
            'total_price' => $data['amount'],
            'status' => 'pending'
        ]);

        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = config('midtrans.isProduction');
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
        $params = [
            'transaction_details' => [
                'order_id' => rand(),
                'gross_amount' => $request->amount,
            ],
            'customer_details' => [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        $transaction->snap_token = $snapToken;
        $transaction->save();

        return redirect()->route('checkout', $transaction->id);
    }

    public function checkout(paymentTransaksi $transaction)
    {
        $carts = Cart::with('produk')->where('user_id', Auth::id())->get();
        $transactions = paymentTransaksi::where('user_id', Auth::id())->first();
        // dd($transactions);
        return view('app.cart.checkout', compact('carts', 'transactions'));
    }
}
