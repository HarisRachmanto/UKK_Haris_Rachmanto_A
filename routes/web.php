<?php

use App\Http\Controllers\admin\MasyarakatDashboardController;
use App\Http\Controllers\admin\PengaduanDashboardController;
use App\Http\Controllers\admin\TanggapanDashboardController;
use App\Http\Controllers\Auth\admin\LoginAdminController;
use App\Http\Controllers\Auth\admin\RegisterAdminController;
use App\Http\Controllers\Auth\masyarakat\LoginMasyarakatController;
use App\Http\Controllers\Auth\masyarakat\RegisterMasyarakatController;
use App\Http\Controllers\masyarakat\LaporanController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('registermasyarakat', [RegisterMasyarakatController::class, 'index'])->name('registermasyarakat');
Route::post('registermasyarakata', [RegisterMasyarakatController::class, 'store'])->name('registermasyarakat.store');
Route::get('loginmasyarakat', [LoginMasyarakatController::class, 'index'])->name('loginmasyarakat');
Route::post('loginmasyarakata', [LoginMasyarakatController::class, 'store'])->name('loginmasyarakat.store');
Route::get('loginmasyarakata', [LoginMasyarakatController::class, 'logout'])->name('loginmasyarakat.logout');

Route::get('laporan', [LaporanController::class, 'index'])->name('laporan');
Route::post('laporana', [LaporanController::class, 'store'])->name('laporan.store');
Route::get('laporanmasyarakat', [LaporanController::class, 'tanggapanlaporanmasyarakat'])->name('laporanmasyarakat');

// register dan login admin
Route::get('registeradmin', [RegisterAdminController::class, 'index'])->name('registeradmin');
Route::post('registeradmina', [RegisterAdminController::class, 'store'])->name('registeradmin.store');
Route::get('loginadmin', [LoginAdminController::class, 'index'])->name('loginadmin');
Route::post('loginadmina', [LoginAdminController::class, 'store'])->name('loginadmin.store');
Route::get('loginadmin/logout', [LoginAdminController::class, 'logout'])->name('loginadmin.logout');

//dashboard Admin
Route::get('dashboardmasyarakat', [MasyarakatDashboardController::class, 'index'])->name('dashboardmasyarakat');
Route::delete('dashboardmasyarakat/delete/{id_pengaduan}', [MasyarakatDashboardController::class, 'destroy'])->name('dashboardmasyarakat.delete');

Route::get('dashboardpengaduan', [PengaduanDashboardController::class, 'index'])->name('dashboardpengaduan');
Route::get('dashboardpengaduan/update/{id_pengaduan}', [PengaduanDashboardController::class, 'update'])->name('status');
Route::get('dashboardpengaduan/cetak/{id_pengaduan}', [PengaduanDashboardController::class, 'cetak'])->name('cetak');
Route::delete('dashboardpengaduan/delete/{id_pengaduan}', [PengaduanDashboardController::class, 'destroy'])->name('dashboardpengaduan.delete');


Route::get('tanggapandashboard/{id_pengaduan}', [TanggapanDashboardController::class, 'index'])->name('tanggapandashboard');
Route::post('tanggapandashboard/{id_pengaduan}', [TanggapanDashboardController::class, 'store'])->name('tanggapandashboard.store');
