<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TanggapanDashboardController extends Controller
{
    public function index($id_pengaduan)
    {
        $data = Pengaduan::findOrFail($id_pengaduan);
        return view('admin.pengaduan.tanggapandash', compact('data'));
    }

    public function store(Request $request, $id_pengaduan)
    {
        $data = Pengaduan::findOrFail($id_pengaduan);
        $validate = $request->all();
        $validate = $request->validate([
           'tgl_tanggapan' => 'required',
           'tanggapan' => 'required'
        ]);
        Tanggapan::create([
            'tgl_tanggapan' => $request->tgl_tanggapan,
            'tanggapan' => $request->tanggapan,
            'id_pengaduan' => $request->id_pengaduan,
            'id_petugas' => Auth::guard('admin')->user()->id_petugas
        ]);
        $data = Pengaduan::findOrFail($id_pengaduan);
        $pengaduan['status'] = 'selesai';
        $data->update($pengaduan);
        return redirect()->route('dashboardpengaduan')->with('sukses','Data berhasil di kirim');
    }
}
