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
        Schema::create('algoritma_greedies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paymenttransaksi_id')->constrained('payment_transaksis')->onDelete('cascade');
            $table->integer('waktuPengerjaan');
            $table->integer('skor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('algoritma_greedies');
    }
};
