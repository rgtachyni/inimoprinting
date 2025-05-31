<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_transaksi_carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payment_transaksi_id')->constrained('payment_transaksis')->onDelete('cascade');
            $table->foreignId('cart_id')->constrained()->onDelete('cascade');

            $table->timestamps();

            $table->unique(['payment_transaksi_id', 'cart_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_transaksi_carts');
    }
};
