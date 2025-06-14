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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('gambar');
            $table->string('username');
            $table->string('namaLengkap');
             $table->string('email');
            $table->string('noHp');
            $table->date('tanggalLahir');
            $table->enum('jkel', ['lakilaki', 'perempuan']);
            // $table->enum('provinsi', ['sulsel', 'sulbar', 'papua', 'jawa']);
            // $table->enum('kabupaten', ['makassar', 'gowa', 'timika', 'jayapura']);
            // $table->integer('kodePos');
            $table->string('alamat');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
