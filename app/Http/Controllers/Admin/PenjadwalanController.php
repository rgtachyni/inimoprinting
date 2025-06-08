<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenjadwalanController extends Controller
{
    public function index()
    {
        $title = 'penjadwalan';
        // $data= customer::all();
        return view('admin.penjadwalan.index', compact('title'));
    }
}
