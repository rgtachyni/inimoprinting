<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'produk_id', 'catatan', 'gambar','jumlah'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }

    public function paymentTransaksis()
    {
        return $this->belongsToMany(PaymentTransaksi::class, 'payment_transaksi_carts');
    }
}
