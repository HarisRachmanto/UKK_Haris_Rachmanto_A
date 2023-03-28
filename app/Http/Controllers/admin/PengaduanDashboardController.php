<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengaduanDashboardController extends Controller
{
    public function index()
    {
        $data = Pengaduan::latest()->get();
        return view('admin.Pengaduan.index', compact('data'));
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

        return redirect()->route('dashboardpengaduan');
    }

    public function cetak($id_pengaduan)
    {
        $data = Pengaduan::with('tanggapan')->where('id_pengaduan', $id_pengaduan)->get();

    	$pdf = Pdf::loadview('admin.pengaduan.cetak', compact('data'))->setOptions(['enable_php', true, 'dpi' => 150, 'defaultFont' => 'sans-serif']);
    	return $pdf->download('');
    }
}
