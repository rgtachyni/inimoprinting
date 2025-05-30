<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Produk;
use App\Models\wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $data = Wishlist::with('produk')->where('user_id', Auth::id())->get();

        return view('app.wishlist.index', compact('data'));
    }

    public function addWhislist(Request $request, $produkId)
    {
        // Cek apakah produk sudah ada di wishlist user
        $cek = Wishlist::where('user_id', Auth::id())
            ->where('produk_id', $produkId)
            ->first();

        if ($cek) {
            return redirect('/wishlist')->with('warning', 'Produk sudah ada di wishlist Anda.');
        }

        // Simpan wishlist baru
        Wishlist::create([
            'user_id' => Auth::id(),
            'produk_id' => $produkId,
        ]);

        return redirect('/wishlist')->with('success', 'Produk berhasil ditambahkan ke wishlist.');
    }

    public function cart($id)
    {
        $wishlist = wishlist::findOrFail($id);

        $cart = Cart::where('user_id', Auth()->id())
            ->where('produk_id', $wishlist->produk_id)->first();

        if ($cart) {
            $cart->jumlah += 1;
            $cart->save();
        } else {
            Cart::create([
                'user_id' => auth()->id(),
                'produk_id' => $wishlist->produk_id,
                'jumlah' => 1,
            ]);
        }

        $wishlist->delete();
        return redirect()->route('cart.view')->with('success', 'produk berhasil di tambahkan');
    }

    public function hapus($id)
    {
        Wishlist::where('id', $id)->where('user_id', Auth::id())->delete();
        return back()->with('success', 'Wishlist dihapus.');
    }
}
