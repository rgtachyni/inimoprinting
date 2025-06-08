<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentCart extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paymentcar = [
            [
                'payment_transaksi_id' => '1',
                'cart_id' => '1'
            ],
            [
                'payment_transaksi_id' => '2',
                'cart_id' => '2'
            ],
            [
                'payment_transaksi_id' => '3',
                'cart_id' => '3'
            ],

        ];
        foreach($paymentcar as $key=> $paymentcars){
            paymenttransaksicart
        }
    }
}
