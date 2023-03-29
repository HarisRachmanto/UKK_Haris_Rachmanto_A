<?php

namespace App\Http\Controllers\Auth\masyarakat;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterMasyarakatController extends Controller
{
    public function index()
    {
        $data = Masyarakat::get();
        return view('auth.masyarakat.registermasyarakat', compact('data'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'telp' => 'required'
        ]);

        $validate['password'] = Hash::make($validate['password']);

        Masyarakat::create($validate);
        return redirect()->route('loginmasyarakat')->with('sukses registrasi', 'Berhasil daftar akun anda! Silahkan Login');
    }
}
