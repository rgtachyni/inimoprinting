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
        'total_price',
        'status',
        'snap_token',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
