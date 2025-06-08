<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AlgoritmaGreedy;
use App\Models\historyPesanan;
use App\Models\paymentTransaksi;
use Illuminate\Http\Request;

class AlgoritmaGreedyController extends Controller
{
    public function hitungSkorPrioritas()
    {

        try {
            $title = 'pesanan';
            $data = PaymentTransaksi::with('carts.produk')->where('status', 'success')->get();

            $maxVolume = $data->map(fn($d) => $d->carts->sum('jumlah'))->max();

            $minVolume = $data->map(fn($d) => $d->carts->sum('jumlah'))->min();
            // dd($minVolume);

            // Waktu dihitung dari volume
            $data = $data->map(function ($item) use ($maxVolume, $minVolume) {
                $volume = $item->carts->sum('jumlah');
                // dd($item->user->name);

                // Tentukan waktu pengerjaan dari volume
                $waktu = match (true) {
                    $volume <= 20 => 2,
                    $volume <= 50 => 3,
                    $volume <= 70 => 4,
                    $volume <= 100 => 5,
                    default => 6,
                };
                // $produk = $item->carts->first()?->produk->namaProduk;
                $produkListWithQty = $item->carts->map(function ($cart) {
                    return sprintf("%s (%d)", $cart->produk->namaProduk ?? 'Produk tidak diketahui', $cart->jumlah);
                })->implode(', ');

                $orderId = $item->order_id;
                $totalPrice = $item->total_price;
                $user = $item->user->name;
                $id = $item->id;



                $waktuSkor = (6 - $waktu) / 4; // max-min = 6-2 = 4
                $urgensiSkor = strtolower($item->urgensi) === 'express' ? 1 : 0;
                $volumeSkor = ($maxVolume - $volume) / max(1, ($maxVolume - $minVolume));

                $totalSkor = ($waktuSkor * 0.4) + ($urgensiSkor * 0.4) + ($volumeSkor * 0.2);

                // dd($totalSkor);
                AlgoritmaGreedy::updateOrCreate(
                    ['paymenttransaksi_id' => $item->id],
                    ['waktuPengerjaan' => $waktu, 'skor' => $totalSkor]
                );
                
            // dd($waktu);
                return [
                    'produk' => $produkListWithQty ?? 'Tidak diketahui',
                    'volume' => $volume,
                    'urgensi' => $item->urgensi,
                    'waktu' => $waktu,
                    'waktuSkor' => round($waktuSkor, 3),
                    'urgensiSkor' => $urgensiSkor,
                    'volumeSkor' => round($volumeSkor, 3),
                    'totalSkor' => round($totalSkor, precision: 5),
                    'order_id' => $orderId,
                    'total_price' => $totalPrice,
                    'user' => $user,
                    'id' => $id,
                    // 'waktuPengerjaan'=>$waktuPengerjaan
                  
                ];
            });

            $ranking = $data->sortByDesc(callback: 'totalSkor')->values();

            return view('admin.pesanan.hasilAlgoritma', ['data' => $ranking, 'title' => $title]);
        } catch (\Exception $e) {
            dd($e);
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return response()->json($this->response);
        }
    }

    public function selesai($id)
    {

        $transaksi = paymentTransaksi::findOrFail($id);

        $transaksi->status = 'done';
        $transaksi->save();


        historyPesanan::create([
            'payment_transaksi_id' => $transaksi->id,
            'status' => $transaksi->status,
        ]);

        return redirect()->back()->with('success', 'Pesanan berhasil diselesaikan dan disimpan ke riwayat.');
    }
}
