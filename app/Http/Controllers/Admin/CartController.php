<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Produk;
use App\Models\cart;
use App\Models\paymentTransaksi;
use Midtrans\Snap;
use App\Helpers\MidtransConfig;
use Midtrans\Transaction;

class CartController extends Controller
{
    public function addToCart($id)
    {

        $produk = Produk::findOrFail($id);
        // $produk = Produk::all();

        $cart = Cart::where('user_id', Auth::id())
            ->where('produk_id', $produk->id)
            ->first();

        if ($cart) {
            $cart->jumlah += 1;
            $cart->save();
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'produk_id' => $produk->id,
                'jumlah' => 1
            ]);
        }

        return redirect('/cart')->with('success', 'Produk ditambahkan ke keranjang.');
    }

    public function viewCart()
    {
        $carts = Cart::with('produk')->where('user_id', Auth::id())->get();
        $grandTotal = $carts->sum(function ($item) {
            return $item->produk->harga * $item->jumlah;
        });
        return view('app.cart.cart', compact('carts', 'grandTotal'));
    }

    public function removeFromCart($id)
    {
        Cart::where('id', $id)->where('user_id', Auth::id())->delete();
        return redirect()->back()->with('success', 'Produk dihapus dari keranjang.');
    }

    public function update(Request $request)
    {
        $cart = Cart::where('id', $request->cart_id)
            ->where('user_id', Auth::id())
            ->first();

        if ($cart) {
            $cart->jumlah = $request->qty;
            $cart->save();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 404);
    }

    public function transaction()
    {
        $data = paymentTransaksi::where('user_id', Auth::id())->get();
        // dd($data);
        return view('app.transaction.index', compact('data'));
    }

    public function success(paymentTransaksi $data)
    {
        dd($data);
        $data->status = 'success';
        $data->save();

        return view('app.transaction.index', compact('data'));
    }

    public function selesai()
    {
        return view('app.cart.selesai');
    }
    public function belumBayar()
    {
        return view('app.cart.belumBayar');
    }
    public function sedangProses()
    {
        return view('app.cart.sedangProses');
    }
    public function dibatalkan()
    {
        return view('app.cart.dibatalkan');
    }
}
