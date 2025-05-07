<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Repositories\Contracts\MenuContract;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    protected $repository;

    public function __construct(MenuContract $repository)
    {
        $this->title = 'menus';
        $this->repository = $repository;
    }

    public function data(Request $request)
    {
        try {
            $title = $this->title;
            $data = $this->repository->paginated($request->all());
            $perPage = $request->jml == '' ? 5 : $request->jml;
            $view = view('admin.' . $title . '.data', compact('data', 'title'))->with('i', ($request->input('page', 1) -
                1) * $perPage)->render();
            return response()->json([
                "total_page" => $data->lastpage(),
                "total_data" => $data->total(),
                "html"       => $view,
            ]);
        } catch (\Exception $e) {
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return response()->json($this->response);
        }
    }
}
