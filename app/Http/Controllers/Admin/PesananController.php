<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $title = 'pesanan';
        return view('admin.pesanan.index', compact('title'));
    }
}
