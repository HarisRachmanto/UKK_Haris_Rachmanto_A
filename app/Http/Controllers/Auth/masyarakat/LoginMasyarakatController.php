<?php

namespace App\Http\Controllers\Auth\masyarakat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginMasyarakatController extends Controller
{
    public function index()
    {
        return view('auth.masyarakat.loginmasyarakat');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if(Auth::guard('masyarakat')->attempt($credentials)){
            return redirect()->route('laporan')->with('berhasil', 'Login Berhasil');
        }
        return back()->with('salah password', 'Username atau password anda salah');
    }

    public function logout()
    {
        Auth::guard('masyarakat')->logout();
        return redirect()->route('loginmasyarakat');
    }
}
