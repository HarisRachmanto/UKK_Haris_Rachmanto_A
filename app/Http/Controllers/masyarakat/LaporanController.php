<?php

namespace App\Http\Controllers\masyarakat;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function index()
    {
        return view('masyarakat.index');
    }

    public function indexPrivate()
    {
        $pengaduans = pengaduan::where('nama', Auth::guard('masyarakat')->user()->nama)->latest()->get();

        return view('masyarakat.tanggapan', compact('pengaduans'));
    }

    public function indexPublic()
    {
        // $pengaduans = Pengaduan::join('masyarakats', 'pengaduans.nik', '=', 'masyarakats.nik')->get(['masyarakats.nama','pengaduans.nik']);
        $pengaduans = Pengaduan::where( 'akses','=' ,'public')->latest()->with('getDataMasyarakat', 'getDataTanggapan')->get();
        return view('masyarakat.public', compact('pengaduans'));
    }



    public function store(Request $request)
    {
        $validate = $request->all();
        $validate = $request->validate([
            'akses' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'isi_laporan' => 'required',
            'foto' => 'required',
            'status' => ''
        ]);
        $image = $request->file('foto')->store('pengaduan-img');
        $validate['foto'] = $image;

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
