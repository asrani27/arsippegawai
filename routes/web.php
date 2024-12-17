<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DiklatController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PensiunController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\MenjabatController;
use App\Http\Controllers\UnitKerjaController;
use App\Http\Controllers\PendidikanController;

Route::get('/', function () {
    return view('login');
});

Route::post('login', [LoginController::class, 'login']);
Route::get('login', [LoginController::class, 'index'])->name('login');

Route::get('/logout', [LogoutController::class, 'logout']);
Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('superadmin', [HomeController::class, 'superadmin']);

    Route::get('superadmin/user', [UserController::class, 'index']);
    Route::get('superadmin/user/create', [UserController::class, 'create']);
    Route::post('superadmin/user/create', [UserController::class, 'store']);
    Route::get('superadmin/user/cari', [UserController::class, 'cari']);
    Route::get('superadmin/user/delete/{id}', [UserController::class, 'delete']);
    Route::get('superadmin/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('superadmin/user/edit/{id}', [UserController::class, 'update']);


    Route::get('superadmin/pegawai', [PegawaiController::class, 'index']);
    Route::get('superadmin/pegawai/create', [PegawaiController::class, 'create']);
    Route::post('superadmin/pegawai/create', [PegawaiController::class, 'store']);
    Route::get('superadmin/pegawai/cari', [PegawaiController::class, 'cari']);
    Route::get('superadmin/pegawai/delete/{id}', [PegawaiController::class, 'delete']);
    Route::get('superadmin/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
    Route::post('superadmin/pegawai/edit/{id}', [PegawaiController::class, 'update']);

    Route::get('superadmin/golongan', [GolonganController::class, 'index']);
    Route::get('superadmin/golongan/create', [GolonganController::class, 'create']);
    Route::post('superadmin/golongan/create', [GolonganController::class, 'store']);
    Route::get('superadmin/golongan/cari', [GolonganController::class, 'cari']);
    Route::get('superadmin/golongan/delete/{id}', [GolonganController::class, 'delete']);
    Route::get('superadmin/golongan/edit/{id}', [GolonganController::class, 'edit']);
    Route::post('superadmin/golongan/edit/{id}', [GolonganController::class, 'update']);

    Route::get('superadmin/unitkerja', [UnitKerjaController::class, 'index']);
    Route::get('superadmin/unitkerja/create', [UnitKerjaController::class, 'create']);
    Route::post('superadmin/unitkerja/create', [UnitKerjaController::class, 'store']);
    Route::get('superadmin/unitkerja/cari', [UnitKerjaController::class, 'cari']);
    Route::get('superadmin/unitkerja/delete/{id}', [UnitKerjaController::class, 'delete']);
    Route::get('superadmin/unitkerja/edit/{id}', [UnitKerjaController::class, 'edit']);
    Route::post('superadmin/unitkerja/edit/{id}', [UnitKerjaController::class, 'update']);

    Route::get('superadmin/pendidikan', [PendidikanController::class, 'index']);
    Route::get('superadmin/pendidikan/create', [PendidikanController::class, 'create']);
    Route::post('superadmin/pendidikan/create', [PendidikanController::class, 'store']);
    Route::get('superadmin/pendidikan/cari', [PendidikanController::class, 'cari']);
    Route::get('superadmin/pendidikan/delete/{id}', [PendidikanController::class, 'delete']);
    Route::get('superadmin/pendidikan/edit/{id}', [PendidikanController::class, 'edit']);
    Route::post('superadmin/pendidikan/edit/{id}', [PendidikanController::class, 'update']);

    Route::get('superadmin/diklat', [DiklatController::class, 'index']);
    Route::get('superadmin/diklat/create', [DiklatController::class, 'create']);
    Route::post('superadmin/diklat/create', [DiklatController::class, 'store']);
    Route::get('superadmin/diklat/cari', [DiklatController::class, 'cari']);
    Route::get('superadmin/diklat/delete/{id}', [DiklatController::class, 'delete']);
    Route::get('superadmin/diklat/edit/{id}', [DiklatController::class, 'edit']);
    Route::post('superadmin/diklat/edit/{id}', [DiklatController::class, 'update']);

    Route::get('superadmin/jabatan', [JabatanController::class, 'index']);
    Route::get('superadmin/jabatan/create', [JabatanController::class, 'create']);
    Route::post('superadmin/jabatan/create', [JabatanController::class, 'store']);
    Route::get('superadmin/jabatan/cari', [JabatanController::class, 'cari']);
    Route::get('superadmin/jabatan/delete/{id}', [JabatanController::class, 'delete']);
    Route::get('superadmin/jabatan/edit/{id}', [JabatanController::class, 'edit']);
    Route::post('superadmin/jabatan/edit/{id}', [JabatanController::class, 'update']);

    Route::get('superadmin/pensiun', [PensiunController::class, 'index']);
    Route::get('superadmin/pensiun/create', [PensiunController::class, 'create']);
    Route::post('superadmin/pensiun/create', [PensiunController::class, 'store']);
    Route::get('superadmin/pensiun/cari', [PensiunController::class, 'cari']);
    Route::get('superadmin/pensiun/delete/{id}', [PensiunController::class, 'delete']);
    Route::get('superadmin/pensiun/edit/{id}', [PensiunController::class, 'edit']);
    Route::post('superadmin/pensiun/edit/{id}', [PensiunController::class, 'update']);

    Route::get('superadmin/menjabat', [MenjabatController::class, 'index']);
    Route::get('superadmin/menjabat/create', [MenjabatController::class, 'create']);
    Route::post('superadmin/menjabat/create', [MenjabatController::class, 'store']);
    Route::get('superadmin/menjabat/cari', [MenjabatController::class, 'cari']);
    Route::get('superadmin/menjabat/delete/{id}', [MenjabatController::class, 'delete']);
    Route::get('superadmin/menjabat/edit/{id}', [MenjabatController::class, 'edit']);
    Route::post('superadmin/menjabat/edit/{id}', [MenjabatController::class, 'update']);

    Route::get('superadmin/laporan', [LaporanController::class, 'index']);
    Route::get('superadmin/laporan/print', [LaporanController::class, 'pdf']);
    Route::get('superadmin/laporan/pegawai', [LaporanController::class, 'pegawai']);
});
