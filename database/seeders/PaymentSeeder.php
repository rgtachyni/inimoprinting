<?php

namespace Database\Seeders;

use App\Models\paymentTransaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment = [
            [
                'user_id' => '2',
                'order_id' => '12345',
                'total_price' => '20000 ',
                'status' => 'success',
                'metode_pembayaran' => 'qris',
                'snap_token' => 'ab3949393'
            ],
            [
                'user_id' => '2',
                'order_id' => '123456',
                'total_price' => '20000 ',
                'status' => 'success',
                'metode_pembayaran' => 'qris',
                'snap_token' => 'ab394939390'
            ],
            [
                'user_id' => '2',
                'order_id' => '12345678',
                'total_price' => '75000 ',
                'status' => 'success',
                'metode_pembayaran' => 'qris',
                'snap_token' => 'ab39493939090'
            ],

        ];
        foreach ($payment as $key => $payments) {
            paymentTransaksi::create([
                'user_id' => $payments['user_id'],
                'order_id' => $payments['order_id'],
                'total_price' => $payments['total_price'],
                'status' => $payments['status'],
                'metode_pembayaran' => $payments['metode_pembayaran'],
                'snap_token' => $payments['snap_token']
            ]);
        }
    }
}
