<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $title = 'customer';
        $data= customer::all();
        return view('admin.customer.index', compact('title','data'));
    }
}
