<?php

namespace Database\Seeders;

use App\Models\Cart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cart = [
            [
                'user_id' => '2',
                'produk_id' => '1',
                'jumlah' => '1',
                'status' => 'success',
            ],
            [
                'user_id' => '2',
                'produk_id' => '2',
                'jumlah' => '4',
                'status' => 'success',
            ],
            [
                'user_id' => '2',
                'produk_id' => '3',
                'jumlah' => '1',
                'status' => 'success',
            ],

        ];
        foreach($cart as $key =>$carts){
            Cart::create([
                'user_id'=>$carts['user_id'],
                'produk_id'=>$carts['produk_id'],
                'jumlah'=>$carts['jumlah'],
                'status'=>$carts['status']
            ]);
        }
    }
}
