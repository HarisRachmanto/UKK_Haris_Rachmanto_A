<?php

namespace App\Http\Controllers\Auth\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    public function index()
    {
        return view('auth.admin.loginadmin');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if(Auth::guard('admin')->attempt($credentials)){
            return redirect()->route('dashboardmasyarakat')->with('berhasil', 'Berhasil login');
        }
        return back()->with('salah password', 'Username atau password anda salah');
    }

        public function logout(Request $request)
        {
            Auth::guard('admin')->logout();
            return redirect()->route('loginadmin');
        }
}
