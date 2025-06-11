<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produk = [
            [
                'namaProduk' => 'Thank card 9 x 9 cm',
                'harga' => '650',
                'kategoriProduk_id' => 1,
                'deskripsi' => 'Tersedia dalam beberapa pilihan bahan, ukuran 9 x 9 cm
                    bisa di cetak 1 muka maupun 2 muka,
                    Print Full color',
                'gambar' => 'tycard1.png'
            ],
            [
                'namaProduk' => 'Thank card 14,5 x 10,5 cm',
                'harga' => '30000',
                'kategoriProduk_id' => 1,
                'deskripsi' => 'Tersedia dalam beberapa pilihan bahan, ukuran 9 x 9 cm
                    bisa di cetak 1 muka maupun 2 muka,
                    Print Full color',
                'gambar' => 'tycard2.png'
            ],
            [
                'namaProduk' => 'Thank card 14 x 14 cm',
                'harga' => '33000',
                'kategoriProduk_id' => 1,
                'deskripsi' => 'Tersedia dalam beberapa pilihan bahan, ukuran 9 x 9 cm
                    bisa di cetak 1 muka maupun 2 muka,
                    Print Full color',
                'gambar' => 'tycard3.png'
            ],
            [
                'namaProduk' => 'Thank card 14 x 14 cm',
                'harga' => '33000',
                'kategoriProduk_id' => 1,
                'deskripsi' => 'Tersedia dalam beberapa pilihan bahan, ukuran 9 x 9 cm
                    bisa di cetak 1 muka maupun 2 muka,
                    Print Full color',
                'gambar' => 'tycard3.png'
            ],
            [
                'namaProduk' => 'Plakat 20 mm',
                'harga' => '325000',
                'kategoriProduk_id' => 2,
                'deskripsi' => 'Plakat akrilik dengan model seperti gambar,
Ketebalan akrilik 20 mm-P 02,
Tinggi plakat kurang lebih 21 cm,
Dicetak menggunakan mesin UV flatbed,
Bisa print dengan foto
    ',
                'gambar' => 'plakat1.png'
            ],
            [
                'namaProduk' => 'Plakat 20 mm- P 12',
                'harga' => '325000',
                'kategoriProduk_id' => 2,
                'deskripsi' => 'Plakat akrilik dengan model seperti gambar,
Ketebalan akrilik 20 mm,
Tinggi plakat kurang lebih 21 cm,
Dicetak menggunakan mesin UV flatbed,
Bisa print dengan foto
    ',
                'gambar' => 'plakat2.png'
            ],
            [
                'namaProduk' => 'Plakat 20 mm',
                'harga' => '325000',
                'kategoriProduk_id' => 2,
                'deskripsi' => 'Plakat akrilik dengan model seperti gambar,
Ketebalan akrilik 20 mm,
Tinggi plakat kurang lebih 21 cm,
Dicetak menggunakan mesin UV flatbed,
Bisa print dengan foto
    ',
                'gambar' => 'plakat3.png'
            ],
            [
                'namaProduk' => 'Kaos anak',
                'harga' => '75000',
                'kategoriProduk_id' => 3,
                'deskripsi' => 'T Shirt Custom Anak dengan metode DTF (Direct transfer Film), 
Tersedian berbagai Warna dan ukuran,
Ukuran 100 (2-3 tahun) | 110 (4-5 tahun) | 120 (6-7 tahun),
Ukuran desain maksimal 30 x 21 cm,
Bisa Satuan
    ',
                'gambar' => 'baju1.png'
            ],
            [
                'namaProduk' => 'T-shirt ',
                'harga' => '75000',
                'kategoriProduk_id' => 3,
                'deskripsi' => 'T Shirt dengan metode DTF (Direct transfer Film),
Ukuran desain maksimal 29 x 20 cm,
Bisa Satuan
    ',
                'gambar' => 'baju2.png'
            ],

        ];
        foreach ($produk as $key => $produks) {
            Produk::create([
                'namaProduk' => $produks['namaProduk'],
                'kategoriProduk_id' => $produks['kategoriProduk_id'],
                'harga' => $produks['harga'],
                'deskripsi' => $produks['deskripsi'],
                'gambar' => $produks['gambar']
            ]);
        }
    }
}
