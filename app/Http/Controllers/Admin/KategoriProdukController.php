<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Repositories\Contracts\KategoriProdukContract;
use Illuminate\Http\Request;
use App\Traits\Uploadable;

class KategoriProdukController extends Controller
{
    use Uploadable;
    protected $repository;
    protected $image_path = 'uploads/produk';


    public function __construct(KategoriProdukContract $repository)
    {
        $this->title = 'kategori-produk';
        $this->repository = $repository;
    }

    public function _error($e)
    {
        $this->response = [
            'message' => $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine()
        ];
        dd($e);
        return view('errors.message', ['message' => $this->response]);
    }

    public function index()
    {
        try {
            $title = $this->title;

            return view('admin.' . $title . '.index', compact('title'));
        } catch (\Exception $e) {
            return $this->_error($e);
        }
    }

    public function data(Request $request)
    {
        try {
            // dd($request->all());
            $title = $this->title;
            $data = $this->repository->paginated($request->all());
            $produk = $this->repository->all();
            $perPage = $request->jml == '' ? 5 : $request->jml;

            $view = view('admin.' . $title . '.data', compact('data', 'title', 'produk'))->with('i', ($request->input('page', 1) -
                1) * $perPage)->render();
            return response()->json([
                "total_page" => $data->lastpage(),
                "total_data" => $data->total(),
                "html"       => $view,
            ]);
        } catch (\Exception $e) {
            dd($e);
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return response()->json($this->response);
        }
    }

    // public function data(Request $request)
    // {
    //     try {
    //         $title = $this->title;
    //         $perPage = $request->filled('jml') ? (int) $request->jml : 5;
    //         $data = $this->repository->paginated($request->all());
    //         $produk = $this->repository->all();

    //         $view = view('admin.' . $title . '.data', compact('data', 'title', 'produk'))
    //             ->with('i', ($request->input('page', 1) - 1) * $perPage)
    //             ->render();

    //         return response()->json([
    //             "total_page" => $data->lastPage(),
    //             "total_data" => $data->total(),
    //             "html"       => $view,
    //         ]);
    //     } catch (\Exception $e) {
    //         \Log::error('Error in HistoryController@data: ' . $e->getMessage(), [
    //             'file' => $e->getFile(),
    //             'line' => $e->getLine(),
    //         ]);

    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Terjadi kesalahan saat memuat data.',
    //         ], 500);
    //     }
    // }

    public function store(Request $request)
    {
        try {
            $req = $request->all();
            // dd($req);
            if ($request->hasFile('gambar')) {
                $image = $request->file('gambar');
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->storeAs('public/kategori', $filename);

                $req['gambar'] = $filename;
            }
            $data = $this->repository->store($req);
            return response()->json($data);
        } catch (\Exception $e) {
            $message = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return response()->json($message);
        }
    }

    public function show($id)
    {
        try {
            $data = $this->repository->find($id);
            return response()->json($data);
        } catch (\Exception $e) {
            $message = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return response()->json($message);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $req = $request->all();
            $data = $this->repository->update($req, $id);
            return response()->json($data);
        } catch (\Exception $e) {
            $message = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return response()->json($message);
        }
    }

    public function destroy($id)
    {

        try {
            $data = $this->repository->delete($id);
            return response()->json($data);
        } catch (\Exception $e) {
            $message = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return response()->json($message);
        }
    }
}
