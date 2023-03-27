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
        return view('masyarakat.tanggapan');
    }

    public function store(Request $request)
    {
        $validate = $request->all();
        $validate = $request->validate([
            'tgl_pengaduan' => 'required',
            'nik' => 'required',
            'isi_laporan' => 'required',
            'foto' => 'required',
        ]);
        if ($request->file('foto')){
            $validate['foto'] = $request->file('foto ')->store('pengaduan-img');
        }

        Pengaduan::create($validate);
        return redirect()->route('laporan')->with('sukses', 'Berhasil mengirim laporan');
    }

    public function update($id)
    {
        $data = Pengaduan::findOrFail($id);
        if ($data->status == 0) {
            $status = 'proses';
        } else {
            $status = 'proses';
        }

        $data = Pengaduan::where('id_pengaduan', $id)->update(['status' => $status]);
        return redirect()->route('DashboardPengaduan');
    }

    public function destroy($id)
    {
        $validate = Pengaduan::findOrFail($id);
        $validate->delete();

        return redirect()->route('DashboardPengaduan');
    }
}
