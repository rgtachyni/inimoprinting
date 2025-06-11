<?php

namespace App\Http\Controllers;

use App\Http\Services\Repositories\Contracts\LowonganContract;
use App\Http\Services\Repositories\Contracts\PelamarContract;
use App\Http\Services\Repositories\ProdukRepository;
use App\Models\kategoriProduk;
use App\Models\Produk;
use App\Models\Wilayah;
use App\Models\customer;
use App\Traits\Uploadable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    use Uploadable;
    protected $foto_path = 'uploads/pelamar/foto';
    protected $berkas_path = 'uploads/pelamar/berkas';

    protected $lowongan, $title, $response, $pelamar;


    public function index(Request $r)
    {
        $produk = Produk::all();
        $kategoriProduk = kategoriProduk::all();
        $user = Auth::user();
        return view('app.index', compact('produk', 'user', 'kategoriProduk'));
    }
    public function produk(Request $r)
    {
        $produk = Produk::all();
        $kategoriProduk = kategoriProduk::all();

        return view('app.produk.produk', compact('produk', 'kategoriProduk'));
    }
    public function cariProduk(Request $request)
    {
        $query  = Produk::query();
        if ($request->has('cari')) {
            $query->where('namaProduk', 'like', '%' . $request->cari . '%');
        }
        $produk = $query->get();

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

    public function detailKategori($id)
    {
        $produk = Produk::where('kategoriProduk_id', $id)->get();
        // dd($produk);

        return view('app.produk.detailKategori', compact('produk'));
    }

    public function detailProduk($id)
    {
        $produk = Produk::findOrFail($id);

        return view('app.produk.detailProduk', compact('produk'));
    }

    public function profil()
    {
        $data = Customer::all()->first();
        return view('app.profil.index', compact('data'));
    }
    public function Showeditprofil()
    {
        $data = customer::all()->first();
        if (!$data) {
            $data = (object)[
                'gambar' => 'default.jpg'
            ];
        }
        return view('app.profil.editprofil', compact('data'));
    }
    public function editProfil(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'namaLengkap'   => 'required|string|max:255',
            'noHp'          => 'required|string',
            'tanggalLahir'  => 'required|date',
            'jkel'          => 'required|string|in:lakilaki,perempuan',
            // 'kabupaten'     => 'required|string',
            // 'provinsi'      => 'required|string',
            // 'kodePos'       => 'required|integer',
            'alamat'        => 'required|string|max:255',
            'email'         => 'required|email',
            'username'      => 'required|string|max:255',
            'gambar'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // Update user
        $user->email = $validated['email'];
        $user->username = $validated['username'];
        $user->save();


        $customer = Customer::firstOrNew(['user_id' => $user->id]);


        $customer->fill($validated);
        $customer->user_id = $user->id;


        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/customer', $filename);
            $customer->gambar = $filename;
        }

        $customer->save();

        return redirect()->route('profil')->with('success', 'Profil berhasil diperbarui');
    }

    public function ShowubahPassword()
    {
        return view('app.profil.ubahpassword');
    }

    public function ubahPassword(Request $request)
    {
        $request->validate([
            'passwordLama' => 'required',
            'passwordBaru' => 'required|min:6|confirmed'
        ]);

        $user = Auth::user();

        if (!Hash::check($request->passwordLama, $user->password)) {
            return back()->withErrors(['passwordLama' => 'Password lama tidak sesuai ']);
        }

        $user->password = Hash::make($request->passwordBaru);
        $user->save();

        return redirect()->back()->with('success', 'Password berhasil di ubah');
    }
}
