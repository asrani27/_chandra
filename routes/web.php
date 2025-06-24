<?php

use App\Http\Controllers\AsetController;
use App\Http\Controllers\BookingController;
use App\Models\Deviasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\DistribusiController;
use App\Http\Controllers\InstalasiController;
use App\Http\Controllers\JalurController;
use App\Http\Controllers\KapalController;
use App\Http\Controllers\KerusakanController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\PemeliharaanController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PengadaanController;
use App\Http\Controllers\PenghapusanController;
use App\Http\Controllers\VerifikasiController;

Route::get('/', [LoginController::class, 'welcome']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['auth', 'superadmin'])->group(function () {
    Route::get('/superadmin', [HomeController::class, 'superadmin']);
    Route::get('/superadmin/pengaduan', [PengaduanController::class, 'index']);
    Route::get('/superadmin/laporan', [LaporanController::class, 'index']);

    Route::get('/superadmin/laporan/bulan', [LaporanController::class, 'bulan']);

    Route::get('/superadmin/user/print', [LaporanController::class, 'user']);
    Route::get('/superadmin/aset/print', [LaporanController::class, 'aset']);
    Route::get('/superadmin/instalasi/print', [LaporanController::class, 'instalasi']);
    Route::get('/superadmin/kerusakan/print', [LaporanController::class, 'kerusakan']);
    Route::get('/superadmin/penghapusan/print', [LaporanController::class, 'penghapusan']);
    Route::get('/superadmin/pemeliharaan/print', [LaporanController::class, 'pemeliharaan']);
    Route::get('/superadmin/pengadaan/print', [LaporanController::class, 'pengadaan']);

    Route::get('/superadmin/user', [UserController::class, 'index']);
    Route::get('/superadmin/user/add', [UserController::class, 'add']);
    Route::post('/superadmin/user/add', [UserController::class, 'store']);
    Route::get('/superadmin/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('/superadmin/user/edit/{id}', [UserController::class, 'update']);
    Route::get('/superadmin/user/delete/{id}', [UserController::class, 'delete']);


    Route::get('/superadmin/aset', [AsetController::class, 'index']);
    Route::get('/superadmin/aset/add', [AsetController::class, 'add']);
    Route::post('/superadmin/aset/add', [AsetController::class, 'store']);
    Route::get('/superadmin/aset/edit/{id}', [AsetController::class, 'edit']);
    Route::post('/superadmin/aset/edit/{id}', [AsetController::class, 'update']);
    Route::get('/superadmin/aset/delete/{id}', [AsetController::class, 'delete']);

    Route::get('/superadmin/instalasi', [InstalasiController::class, 'index']);
    Route::get('/superadmin/instalasi/add', [InstalasiController::class, 'add']);
    Route::post('/superadmin/instalasi/add', [InstalasiController::class, 'store']);
    Route::get('/superadmin/instalasi/edit/{id}', [InstalasiController::class, 'edit']);
    Route::post('/superadmin/instalasi/edit/{id}', [InstalasiController::class, 'update']);
    Route::get('/superadmin/instalasi/delete/{id}', [InstalasiController::class, 'delete']);

    Route::get('/superadmin/kerusakan', [KerusakanController::class, 'index']);
    Route::get('/superadmin/kerusakan/add', [KerusakanController::class, 'add']);
    Route::post('/superadmin/kerusakan/add', [KerusakanController::class, 'store']);
    Route::get('/superadmin/kerusakan/edit/{id}', [KerusakanController::class, 'edit']);
    Route::post('/superadmin/kerusakan/edit/{id}', [KerusakanController::class, 'update']);
    Route::get('/superadmin/kerusakan/delete/{id}', [KerusakanController::class, 'delete']);


    Route::get('/superadmin/pemeliharaan', [PemeliharaanController::class, 'index']);
    Route::get('/superadmin/pemeliharaan/add', [PemeliharaanController::class, 'add']);
    Route::post('/superadmin/pemeliharaan/add', [PemeliharaanController::class, 'store']);
    Route::get('/superadmin/pemeliharaan/edit/{id}', [PemeliharaanController::class, 'edit']);
    Route::post('/superadmin/pemeliharaan/edit/{id}', [PemeliharaanController::class, 'update']);
    Route::get('/superadmin/pemeliharaan/delete/{id}', [PemeliharaanController::class, 'delete']);

    Route::get('/superadmin/pengadaan', [PengadaanController::class, 'index']);
    Route::get('/superadmin/pengadaan/add', [PengadaanController::class, 'add']);
    Route::post('/superadmin/pengadaan/add', [PengadaanController::class, 'store']);
    Route::get('/superadmin/pengadaan/edit/{id}', [PengadaanController::class, 'edit']);
    Route::post('/superadmin/pengadaan/edit/{id}', [PengadaanController::class, 'update']);
    Route::get('/superadmin/pengadaan/delete/{id}', [PengadaanController::class, 'delete']);

    Route::get('/superadmin/penghapusan', [PenghapusanController::class, 'index']);
    Route::get('/superadmin/penghapusan/add', [PenghapusanController::class, 'add']);
    Route::post('/superadmin/penghapusan/add', [PenghapusanController::class, 'store']);
    Route::get('/superadmin/penghapusan/edit/{id}', [PenghapusanController::class, 'edit']);
    Route::post('/superadmin/penghapusan/edit/{id}', [PenghapusanController::class, 'update']);
    Route::get('/superadmin/penghapusan/delete/{id}', [PenghapusanController::class, 'delete']);
});

Route::get('/logout', function () {
    Auth::logout();
    Session::flash('success', 'Anda Telah Logout');
    return redirect('/');
});
