<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    // protected $table = 'menu';
    protected $fillable = [
        'parent',
        'name',
        'icon',
        'url',
        'index',
        'sort',
        'active',
    ];

    public function UserMenu()
    {
        return $this->hasMany('App\Models\UserMenu', 'menu_id', 'id');
    }
}
