<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\customer;
use App\Models\historyPesanan;
use App\Models\paymentTransaksi;
use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->check() && auth()->user()->role_id == '1') {
            return redirect()->route('akun');
        }
        $totalCustomer = customer::count();
        $totalProduk = Produk::count();
        $totalPesananSelesai = historyPesanan::count();
        $totalPesananProses = paymentTransaksi::where('status', 'success')->count();
        return view('admin.dashboard', compact('totalCustomer', 'totalProduk', 'totalPesananSelesai', 'totalPesananProses'));
    }
}
