<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\historyPesanan;
use App\Models\paymentTransaksi;
use Illuminate\Http\Request;

class HistoryController extends Controller
{

    public function index(Request $request)
    {
        $title = 'History';

        // Ambil parameter
        $perPage = $request->input('jml', 5);
        $search = $request->input('search');

        // Query dasar
        $query = historyPesanan::with(['paymentTransaksi.user'])
            ->where('status', 'done');

        // dd($query->where(function ($q) use ($search) {
        //     $q->whereHas('paymentTransaksi.user', function ($sub) use ($search) {
        //         $sub->where('name', 'like', '%' . $search . '%')
        //             ->orWhere('email', 'like', '%' . $search . '%');
        //     })
        //         ->orWhere('kode_transaksi', 'like', '%' . $search . '%');
        // }));

        // Filter jika ada pencarian
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->whereHas('paymentTransaksi.user', function ($sub) use ($search) {
                    $sub->where('name', 'like', '%' . $search . '%')
                        ->orWhere('email', 'like', '%' . $search . '%');
                })
                    ->orWhere('kode_transaksi', 'like', '%' . $search . '%');
            });
        }

        $history = $query->orderBy('created_at', 'desc')->paginate($perPage);

        if ($request->ajax()) {
            return view('admin.history._table', compact('history'))->render();
        }

        return view('admin.history.index', compact('title', 'history'));
    }

    public function selesai($id)
    {

        $transaksi = paymentTransaksi::findOrFail($id);

        $transaksi->status = 'done';
        // $transaksi->status = now();
        $transaksi->save();


        historyPesanan::create([
            'payment_transaksi_id' => $transaksi->id,
            'status' => $transaksi->status,
            // 'completed_at' => $transaksi->completed_at,
        ]);

        return redirect()->back()->with('success', 'Pesanan berhasil diselesaikan dan disimpan ke riwayat.');
    }
}
