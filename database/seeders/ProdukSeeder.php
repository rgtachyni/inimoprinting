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
                'harga' => '20000',
                'deskripsi' => 'Stiker adalah label yang melekat pada suatu permukaan. Ini bisa berupa media informasi visual seperti lembaran kertas atau plastik yang ditempelkan. Stiker dapat digunakan untuk dekorasi, promosi, atau fungsional sesuai kebutuhan. ',
                'gambar' => 'stiker.jpg'
            ],
            [
                'namaProduk' => 'spanduk',
                'harga' => '5000',
                'deskripsi' => 'Spanduk adalah media komunikasi visual yang digunakan untuk menyampaikan informasi, promosi, atau pesan lainnya kepada publik, biasanya dengan ukuran panjang dan lebar yang signifikan. Spanduk sering dipasang di tempat-tempat strategis seperti jalanan, depan toko, atau area acara untuk menarik perhatian dan menyampaikan pesan secara jelas. ',
                'gambar' => 'spanduk.jpg'
            ],
           
            [
                'namaProduk' => 'tumbler',
                'harga' => '75000',
                'deskripsi' => 'Tumbler adalah wadah minuman berbentuk silinder yang dirancang untuk digunakan saat bepergian. Biasanya terbuat dari plastik, kaca, atau baja nirkarat, dan sering memiliki insulasi untuk menjaga suhu minuman panas atau dingin. Tumbler memiliki tutup rapat, sehingga aman dibawa dan diminum tanpa tumpah',
                'gambar' => 'tumblare.png'
            ],
            [
                'namaProduk' => 'stempel',
                'harga' => '55000',
                'deskripsi' => 'Stempel, atau cap, adalah alat yang digunakan untuk membuat rekaman tanda (gambar, tanda tangan) dengan menekannya pada kertas atau permukaan lainnya. Stempel berfungsi sebagai tanda pengenal, pengesahan, dan alat pertanggungjawaban dalam berbagai dokumen resmi. ',
                'gambar' => 'stempel.png'
            ],
            [
                'namaProduk' => 'id card',
                'harga' => '2000',
                'deskripsi' => 'ID Card adalah kartu identitas yang berfungsi untuk mengidentifikasi seseorang, baik itu sebagai karyawan, pelajar, atau anggota suatu organisasi. ID Card biasanya berisi informasi seperti nama, foto, jabatan (untuk karyawan), dan nomor identitas. ',
                'gambar' => 'idcard.png'
            ],
            [
                'namaProduk' => 'akrilik',
                'harga' => '2000',
                'deskripsi' => 'Akrilik adalah sejenis plastik polimer transparan yang sering digunakan sebagai alternatif kaca karena ringan, mudah dibentuk, dan tahan benturan. Ia memiliki kejernihan yang tinggi, seperti kaca, namun lebih ringan dan tidak mudah pecah.  ',
                'gambar' => 'akrilik.png'
            ],
            [
                'namaProduk' => 'baju',
                'harga' => '105000',
                'deskripsi' => 'Baju, dalam bahasa Indonesia, mengacu pada pakaian yang menutupi bagian atas tubuh, seperti kemeja, atasan, atau blus. Pakaian secara umum adalah segala sesuatu yang dikenakan pada tubuh manusia, terbuat dari bahan seperti kain, tekstil, atau bahkan kulit hewan. Pakaian berfungsi untuk melindungi tubuh dari cuaca, menjaga kebersihan, meningkatkan keamanan, dan memberikan kenyamanan. ',
                'gambar' => 'baju.png'
            ],
            [
                'namaProduk' => 'ganci',
                'harga' => '60000',
                'deskripsi' => 'Ganci (singkatan dari gantungan kunci) adalah alat kecil yang digunakan untuk menggantungkan kunci atau objek kecil lainnya. Ganci biasanya terbuat dari logam, plastik, atau karet, dan berfungsi untuk memudahkan kita menyimpan kunci dan memperindah penampilan. ',
                'gambar' => 'ganci.png'
            ],
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
