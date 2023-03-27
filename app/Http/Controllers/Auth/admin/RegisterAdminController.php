<?php

namespace App\Http\Controllers\Auth\admin;

use App\Http\Controllers\Controller;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterAdminController extends Controller
{
    public function index()
    {
        return view('auth.admin.registeradmin');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_petugas' => 'required',
            'username' => 'required',
            'password' => 'required',
            'telp' => 'required',
            'level' => 'required'
        ]);

        $validate['password'] = Hash::make($validate['password']);
        $validate['level'] = 'admin';

        Petugas::create($validate);
        return redirect()->route('registeradmin')->with('sukses registrasi', 'Berhasil daftar akun anda! Silahkan Login');
    }
}
