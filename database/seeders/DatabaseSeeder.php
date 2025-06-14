<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(UserMenuSeeder::class);
        $this->call(KategoriProdukSeeder::class);
        $this->call(ProdukSeeder::class);
        // $this->call(PaymentSeeder::class);
        // $this->call(CartSeeder::class);
       
    }
}
