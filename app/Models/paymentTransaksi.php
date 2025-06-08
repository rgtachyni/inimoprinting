<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentTransaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'order_id',
        'cart_id',
        'total_price',
        'status',
        'urgensi',
        'metode_pembayaran',
        'snap_token',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'payment_transaksi_carts', 'payment_transaksi_id', 'cart_id');
    }
    // public function carts()
    // {
    //     return $this->hasMany(Cart::class, 'order_id', 'order_id');
    // }
}
