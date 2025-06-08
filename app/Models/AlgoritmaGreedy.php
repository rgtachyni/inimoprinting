<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlgoritmaGreedy extends Model
{
    use HasFactory;
    protected $fillable = ['paymenttransaksi_id', 'waktuPengerjaan', 'skor'];

    public function paymentTransaksi()
    {
        return $this->belongsTo(PaymentTransaksi::class);
    }
}
