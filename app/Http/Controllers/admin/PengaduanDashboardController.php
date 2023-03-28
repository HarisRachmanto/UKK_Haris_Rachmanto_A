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
        // $data = Pengaduan::where('pengaduan.*','tanggapan.id_tanggapan','=','pengaduan.id_pengaduan');
        // $data = DB::table('pengaduans')
        // ->join('tanggapans', 'tanggapans.id_tanggapan', '=', 'pengaduans.id_pengaduan')
        // ->select('')
        // ->get();

        $data = Pengaduan::select('pengaduan.*','tanggapans.tanggapan')->leftjoin('pengaduans','=','tanggapans.id_tanggapan','=','pengaduans.id_pengaduan');
        return view('admin.Pengaduan.index', compact('data'));
    }

    public function destroy($id_pengaduan)
    {
        $validate = Pengaduan::where('id_pengaduan', $id_pengaduan);
        $validate->delete();
        return redirect('dashboardpengaduan');
    }

    public function cetak($id_pengaduan)
    {
        $data = Pengaduan::with('tanggapan')->where('id_pengaduan', $id_pengaduan)->get();

    	$pdf = Pdf::loadview('admin.pengaduan.cetak', compact('data'))->setOptions(['enable_php', true, 'dpi' => 150, 'defaultFont' => 'sans-serif']);
    	return $pdf->download('');
    }
}
