<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMenu extends Model
{
    use HasFactory;
    // protected $table = 'user_menu';
    protected $fillable = [
        'role_id',
        'menu_id',
        'read',
        'create',
        'edit',
        'delete',
        'report',
        'created_by',
        'updated_by'
    ];

    public function Menu()
    {
        return $this->hasOne('App\Models\Menu', 'id', 'menu_id');
    }

    public function Role()
    {
        return $this->hasOne('App\Models\Role', 'id', 'role_id');
    }
}
