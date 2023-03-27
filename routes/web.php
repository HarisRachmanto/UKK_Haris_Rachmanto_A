<?php

use App\Http\Controllers\admin\MasyarakatDashboardController;
use App\Http\Controllers\admin\PengaduanDashboardController;
use App\Http\Controllers\Auth\admin\RegisterAdminController;
use App\Http\Controllers\Auth\masyarakat\LoginMasyarakatController;
use App\Http\Controllers\Auth\masyarakat\RegisterMasyarakatController;
use App\Http\Controllers\masyarakat\LaporanController;
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

Route::get('registeradmin', [RegisterAdminController::class, 'index'])->name('registermasyarakat');
Route::post('registeradmina', [RegisterAdminController::class, 'store'])->name('registeradmin.store');

//dashboard Admin
Route::get('dashboardmasyarakat', [MasyarakatDashboardController::class, 'index'])->name('dashboardmasyarakat');

Route::get('dashboardpengaduan', [PengaduanDashboardController::class, 'index'])->name('dashboardpengaduan');
