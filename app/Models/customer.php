<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'gambar',
        'username',
        'namaLengkap',
        'email',
        'noHp',
        'tanggalLahir',
        'jkel',
        'provinsi',
        'kabupaten',
        'kodePos',
        'alamat'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
