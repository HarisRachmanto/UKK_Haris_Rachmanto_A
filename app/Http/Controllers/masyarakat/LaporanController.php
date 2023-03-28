<?php

namespace App\Http\Controllers\masyarakat;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('masyarakat.index');
    }

    public function tanggapanlaporanmasyarakat()
    {
        $data = Pengaduan::latest()->get();
        return view('masyarakat.tanggapan', compact('data'));
    }

    public function store(Request $request)
    {
        $validate = $request->all();
        $validate = $request->validate([
            'tgl_pengaduan' => 'required',
            'nik' => 'required',
            'isi_laporan' => 'required',
            'foto' => 'required',
            'status' => ''
        ]);
        if($request->file('foto')){
            $validate['foto'] = $request->file('foto')->store('pengaduan-img');
        }


        Pengaduan::create($validate);
        return redirect()->route('laporan')->with('sukses', 'Berhasil mengirim laporan');
    }

    public function update($id_pengaduan)
    {
        $data = Pengaduan::findOrFail($id_pengaduan);
        if ($data->status == 0) {
            $status = 'proses';
        } else {
            $status = 'proses';
        }

        $data = Pengaduan::where('id_pengaduan', $id_pengaduan)->update(['status' => $status]);
        return redirect()->route('dashboardpengaduan');
    }

    public function destroy($id)
    {
        $validate = Pengaduan::findOrFail($id);
        $validate->delete();

        return redirect()->route('DashboardPengaduan');
    }
}
