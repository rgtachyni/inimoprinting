<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historyPesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'payment_transaksi_id',
        'status',

    ];

    public function paymentTransaksi()
    {
        return $this->belongsTo(paymentTransaksi::class);
    }
}
