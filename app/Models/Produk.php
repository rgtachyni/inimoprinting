<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategoriProduk_id',
        'namaProduk',
        'harga',
        'deskripsi',
        'gambar',
    ];

    public function wishlist()
    {
        return $this->hasMany(wishlist::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function kategori()
    {
        return $this->hasOne(kategoriProduk::class, 'id', 'kategoriProduk_id');
    }
}
