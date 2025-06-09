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
                'nama' => 'Tumbler',
            ],
           
        ];
        foreach ($produk as $key => $produks) {
            kategoriProduk::create([
                'id' => $produks['id'],
                'nama' => $produks['nama'],
            ]);
        }
    }
}
