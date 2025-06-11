<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\kategoriProduk;

class KategoriProdukSeeder extends Seeder
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
                'id' => 1,
                'nama' => 'Thank you card',
                'gambar' => 'thankyoucard.png',
            ],
            [
                'id' => 2,
                'nama' => 'Plakat Akrilik',
                'gambar' => 'akrilik.png',
            ],
            [
                'id' => 3,
                'nama' => 'Baju',
                'gambar' => 'baju.png',
            ],
            [
                'id' => 4,
                'nama' => 'Ganci',
                'gambar' => 'ganci.png',
            ],
            [
                'id' => 5,
                'nama' => 'Banner',
                'gambar' => 'banner.jpg',
            ],
            [
                'id' => 6,
                'nama' => 'Id card',
                'gambar' => 'idcard.png',
            ],
            [
                'id' => 7,
                'nama' => 'Stempel',
                'gambar' => 'stempel.png',
            ],

        ];
        foreach ($produk as $key => $produks) {
            kategoriProduk::create([
                'id' => $produks['id'],
                'nama' => $produks['nama'],
                'gambar' => $produks['gambar'],
            ]);
        }
    }
}
