<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\historyPesanan;
use App\Models\paymentTransaksi;
use App\Models\Produk;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $title = 'pesanan';
        $data = PaymentTransaksi::with('carts.produk')
            ->where('status', 'success')
            // ->where('user_id')
            ->get();


        // dd($data);
        return view('admin.pesanan.index', compact('title', 'data'));
    }

    public function show($order_id)
    {
        $transaksi = paymentTransaksi::with('user')
            ->where('order_id', $order_id)
            ->first();

        $produkIds = explode(',', $transaksi->produk_id);
        $produkList = Produk::whereIn('id', $produkIds)->get();

        return view('admin.pesanan.detail', [
            'transaksi' => $transaksi,
            'produkList' => $produkList,
        ]);
    }


    public function data()
    {
        $data = paymentTransaksi::all();
        // dd($data);
        return view('admin.pesanan.data', compact('data'));
    }
}
