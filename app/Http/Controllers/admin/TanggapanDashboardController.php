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
        $data = Pengaduan::where('id_pengaduan', $id_pengaduan)->first();
        return view('admin.pengaduan.tanggapandash', compact('data'));
    }

    public function store(Request $request, $id_pengaduan)
    {
        $data = Pengaduan::where('id_pengaduan', $id_pengaduan)->get();
        $validate = $request->all();
        $validate = $request->validate([
           'tgl_tanggapan' => 'required',
           'tanggapan' => 'required'
        ]);
        Tanggapan::create([
            'tgl_tanggapan' => $request->tgl_tanggapan,
            'tanggapan' => $request->tanggapan,
            'id_pengaduan' => $request->id_pengaduan,
            'id_petugas' => 1,
        ]);

        Pengaduan::where('id_pengaduan',$id_pengaduan)->update([
            'status' => 'selesai'
        ]);
        
        return redirect()->route('dashboardpengaduan')->with('sukses','Data berhasil di kirim');
    }
}
