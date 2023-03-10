<?php

use App\Http\Controllers\MasyarakatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanController;
use App\Models\Tanggapan;

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
    return view('login/masyarakat', [
        "title" => "Login",
        "level" => "Masyarakat"
    ]);
});

// Controller Masyarakat

Route::get('/masyarakat', function () {
    return view('masyarakat/home', [
        "title" => "Home",
        "level" => "Masyakarat"
    ]);
});
Route::get('/masyarakat/home', function () {
    return view('masyarakat/home', [
        "title" => "Home",
        "level" => "Masyakarat"
    ]);
});
Route::get('/masyarakat/profile', function () {
    return view('masyarakat/profile', [
        "title" => "Profile",
        "level" => "Masyakarat"
    ]);
});


Route::get('/masyarakat/pengaduan/tulis', [PengaduanController::class, 'tulis']);
Route::post('/masyarakat/pengaduan/tulis', [PengaduanController::class, 'proses_tulis']);

Route::get('/masyarakat/pengaduan/edit/{id}', [PengaduanController::class, 'edit']);
Route::get('/masyarakat/pengaduan/hapus/{id}', [PengaduanController::class, 'delete']);
Route::post('/masyarakat/pengaduan/edit', [PengaduanController::class, 'proses_edit']);

Route::get('/masyarakat/pengaduan/lihat', [PengaduanController::class, 'lihat']);

Route::get('/masyarakat/pengaduan/detail/{id}', [PengaduanController::class, 'detail']);
Route::get('/masyarakat/tanggapan/{id}', [TanggapanController::class, 'lihat_tanggapan']);
Route::get('/masyarakat/logout', function () {
    
});

//

// Controller Petugas

// level Petugas

Route::get('/petugas', function () {
    return view('petugas/petugas/home', [
        "title" => "Home",
        "level" => "Petugas",
    ]);
});
Route::get('/petugas/home', function () {
    return view('petugas/petugas/home', [
        "title" => "Home",
        "level" => "Petugas",
    ]);
});
Route::get('/petugas/profile', function () {
    return view('petugas/petugas/profile', [
        "title" => "Profile",
        "level" => "Petugas",
    ]);
});
Route::get('/petugas/pengaduan/detail/{id}', [PengaduanController::class, 'detailbyPetugas']);


Route::get('/petugas/pengaduan/verifikasi', [PengaduanController::class, 'verifikasiPengaduan']);
Route::get('/petugas/verifikasi/{id}', [PengaduanController::class, 'verifikasi']);
Route::get('/petugas/tolak/{id}', [PengaduanController::class, 'tolak']);
Route::get('/petugas/pengaduan/tanggapi', [TanggapanController::class, 'tanggapiPengaduan']);
Route::get('/petugas/tanggapan/tulis/{id}', [TanggapanController::class, 'tulis_tanggapan']);
Route::post('/petugas/tanggapan/tulis', [TanggapanController::class, 'proses_tulis_tanggapan']);
Route::get('/petugas/tanggapan/kelola', [TanggapanController::class, 'kelola_tanggapan']);
Route::get('/petugas/tanggapan/edit/{id}', [TanggapanController::class, 'edit']);

Route::post('/petugas/tanggapan/edit', [TanggapanController::class, 'proses_edit']);

Route::get('/petugas/tanggapan/detail/{id}', [TanggapanController::class, 'detail']);

Route::get('/petugas/tanggapan/hapus/{id}', [TanggapanController::class, 'hapus']);

Route::get('/petugas/masyarakat/lihat', [MasyarakatController::class, 'lihat']);
Route::get('/petugas/logout', function () {
    
});

//

// level Admin

Route::get('/admin', function () {
    return view('petugas/admin/home');
});
Route::get('/admin/home', function () {
    return view('petugas/admin/home');
});
Route::get('/admin/profile', function () {
    return view('petugas/admin/profile');
});
Route::get('/admin/pengaduan/lihat', function () {
    return view('petugas/admin/lihat_pengaduan');
});
Route::get('/admin/pengaduan/detail', function () {
    return view('petugas/admin/detail_pengaduan');
});
Route::get('/admin/pengaduan/verifikasi', function () {
    return view('petugas/admin/verifikasi_pengaduan');
});
Route::get('/admin/pengaduan/tanggapi', function () {
    return view('petugas/admin/tanggapi_pengaduan');
});
Route::get('/admin/tanggapan/tulis', function () {
    return view('petugas/admin/tulis_tanggapan');
});
Route::get('/admin/tanggapan/lihat', function () {
    return view('petugas/admin/lihat_tanggapan');
});
Route::get('/admin/tanggapan/edit', function () {
    return view('petugas/admin/edit_tanggapan');
});
Route::get('/admin/tanggapan/detail', function () {
    return view('petugas/admin/detail_tanggapan');
});
Route::get('/admin/tanggapan/kelola', function () {
    return view('petugas/admin/kelola_tanggapan');
});
Route::get('/admin/masyarakat/lihat', function () {
    return view('petugas/admin/lihat_masyarakat');
});
Route::get('/admin/masyarakat/lihat', function () {
    return view('petugas/admin/lihat_masyarakat');
});
Route::get('/admin/laporan/laporan_pengaduan', function () {
    return view('petugas/admin/laporan_pengaduan');
});
Route::get('/admin/laporan/laporan_masyarakat', function () {
    return view('petugas/admin/laporan_masyarakat');
});
Route::get('/admin/laporan/laporan_tanggapan', function () {
    return view('petugas/admin/laporan_tanggapan');
});
Route::get('/admin/logout', function () {
    
});

//

// level Super Admin

Route::get('/superAdmin', function () {
    return view('petugas/superAdmin/home');
});
Route::get('/superAdmin/home', function () {
    return view('petugas/superAdmin/home');
});
Route::get('/superAdmin/profile', function () {
    return view('petugas/superAdmin/profile');
});
Route::get('/superAdmin/tanggapan/lihat', function () {
    return view('petugas/superAdmin/lihat_tanggapan');
});
Route::get('/superAdmin/tanggapan/detail', function () {
    return view('petugas/superAdmin/detail_tanggapan');
});
Route::get('/superAdmin/tanggapan/pengaduan', function () {
    return view('petugas/superAdmin/pengaduan_tanggapan');
});
Route::get('/superAdmin/petugas/lihat', function () {
    return view('petugas/superAdmin/lihat_petugas');
});
Route::get('/superAdmin/petugas/verifikasi', function () {
    return view('petugas/superAdmin/verifikasi_petugas');
});
Route::get('/superAdmin/laporan/laporan_petugas', function () {
    return view('petugas/superAdmin/laporan_petugas');
});
Route::get('/superAdmin/laporan/laporan_tanggapan', function () {
    return view('petugas/superAdmin/laporan_tanggapan');
});

Route::get('/superAdmin/logout', function () {
    
});

//

//

// Controller Login Dan Register

Route::get('/masyarakat/login', function () {
    return view('login/masyarakat',[
        "title" => "Login",
        "level" => "Masyarakat"
    ]);
});
Route::get('/masyarakat/proses_login', []);
Route::get('/masyarakat/register', [RegisterController::class, 'index']);
Route::post('/masyarakat/proses_register', [RegisterController::class, 'store']);

Route::get('/petugas/login', function () {
    return view('login/petugas',[
        "title" => "Login",
        "level" => "Petugas"
    ]);
});
Route::get('/petugas/register', [RegisterController::class, 'petugas']);

Route::post('/petugas/proses_register', [RegisterController::class, 'register_petugas']);



//

Route::get('/welcome', function () {
    return view('welcome');
});


