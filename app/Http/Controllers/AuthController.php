<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Services\Repositories\Contracts\UserContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    protected $user, $response;

    public function __construct(UserContract $user)
    {
        $this->user = $user;
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function prosesLogin(Request $r)
    {
        try {
            if (Auth::attempt(['username' => $r->username, 'password' => $r->password])) {
                if (auth()->user()->role_id == 1) {
                    // dd($r->all());
                    return response()->json(['message' => 'user']);
                }
                //  return redirect('/admin/') 
                else {
                    // create sesion menu
                    Helper::menu();
                    return response()->json(['message' => 'admin']);
                }
            } else {
                return response()->json(['message' => 'error']);
            }
        } catch (\Exception $e) {
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return response()->json($this->response);
        }
    }

    public function register()
    {
        return view('admin.auth.register');
    }


    public function registerCreate(Request $r)
    {
        // dd($r->all());
        // try {
        // Validasi input
        $r->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|unique:users,username|max:255',
            'email' => 'required|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        // Simpan user ke database
        // $user = new \App\Models\User();
        \App\Models\User::create([
            'name' => $r->name,
            'username' => $r->username,
            'email' => $r->email,
            'password' => bcrypt($r->password),
            'role_id' => 1

        ]);


        return redirect('/login')->with('succes', 'register berhasil silahkan login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
