<?php

namespace App\Http\Controllers;

use App\Http\Services\Repositories\Contracts\LowonganContract;
use App\Http\Services\Repositories\Contracts\PelamarContract;
use App\Http\Services\Repositories\ProdukRepository;
use App\Models\Produk;
use App\Models\Wilayah;
use App\Models\Wisata;
use App\Traits\Uploadable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    use Uploadable;
    protected $foto_path = 'uploads/pelamar/foto';
    protected $berkas_path = 'uploads/pelamar/berkas';

    protected $lowongan, $title, $response, $pelamar;


    public function index(Request $r)
    {
        $produk = Produk::all();
        $user = Auth::user();
        return view('app.index', compact('produk', 'user'));
    }
    public function produk(Request $r)
    {
        $produk = Produk::all();
        return view('app.produk.produk', compact('produk'));
    }
    public function store(Request $r)
    {
        $produk = Produk::all();
        return view('app.store.store');
    }
    public function contact(Request $r)
    {
        // $produk = Produk::all();
        return view('app.contact.contact');
    }
    public function indexData(Request $r)
    {
        $title = $this->title;
        $data = $this->lowongan->lowonganAktif($r->all());
        $perPage = $r->jml == '' ? 6 : $r->jml;
        $view = view('apps.dataHome', compact('data', 'title'))->with('i', ($r->input('page', 1) -
            1) * $perPage)->render();
        return response()->json([
            "total_page" => $data->lastpage(),
            "total_data" => $data->total(),
            "html"       => $view,
        ]);
    }

    public function detailProduk($id)
    {
        $produk = Produk::findOrFail($id);

        return view('app.produk.detailProduk', compact('produk'));
    }
}
