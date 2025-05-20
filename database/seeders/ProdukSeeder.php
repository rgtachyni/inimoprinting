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
                'namaProduk' => 'stiker',
                'harga' => '10000',
                'deskripsi' => 'pppp',
                'gambar' => 'gambar/gambar1.png'
            ],
            [
                'namaProduk' => 'spanduk',
                'harga' => '5000',
                'deskripsi' => 'pppp',
                'gambar' =>'storage/gambar/spanduk.jpg'
            ],
            [
                'namaProduk' => 'banner',
                'harga' => '7000',
                'deskripsi' => 'pppp',
                'gambar' => 'gambar/banner.jpg'
            ],
            [
                'namaProduk' => 'stiker',
                'harga' => '10000',
                'deskripsi' => 'pppp',
                'gambar' => 'gambar/stiker.jpg'
            ],
            [
                'namaProduk' => 'spanduk',
                'harga' => '5000',
                'deskripsi' => 'pppp',
                'gambar' => 'gambar/spanduk.jpg'
            ],
            [
                'namaProduk' => 'banner',
                'harga' => '7000',
                'deskripsi' => 'pppp',
                'gambar' => 'gambar/banner.jpg'
            ]
        ];
        foreach ($produk as $key => $produks) {
            Produk::create([
                'namaProduk' => $produks['namaProduk'],
                'harga' => $produks['harga'],
                'deskripsi' => $produks['deskripsi'],
                'gambar' => $produks['gambar']
            ]);
        }
    }
}
