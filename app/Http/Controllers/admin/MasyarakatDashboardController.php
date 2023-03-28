<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatDashboardController extends Controller
{
    public function index()
    {
        $data = Masyarakat::latest()->get();
        return view('admin.masyarakat', compact('data'));
    }
    public function destroy($id_pengaduan)
    {
        $validate = Masyarakat::findOrFail($id_pengaduan);
        $validate->delete();

        return redirect()->route('dashboardmasyarakat');
    }
}
