<?php

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
    return view('login/masyarakat');
});

// Controller Masyarakat

Route::get('/masyarakat', function () {
    return view('masyarakat/home');
});
Route::get('/masyarakat/home', function () {
    return view('masyarakat/home');
});
Route::get('/masyarakat/profile', function () {
    return view('masyarakat/profile');
});
Route::get('/masyarakat/pengaduan/tulis', function () {
    return view('masyarakat/tulis_pengaduan');
});
Route::get('/masyarakat/pengaduan/edit', function () {
    return view('masyarakat/edit_pengaduan');
});
Route::get('/masyarakat/pengaduan/lihat', function () {
    return view('masyarakat/lihat_pengaduan');
});
Route::get('/masyarakat/pengaduan/detail', function () {
    return view('masyarakat/detail_pengaduan');
});
Route::get('/masyarakat/tanggapan', function () {
    return view('masyarakat/tanggapan_pengaduan');
});
Route::get('/masyarakat/logout', function () {
    
});

//

// Controller Petugas

// level Petugas

Route::get('/petugas', function () {
    return view('petugas/petugas/home');
});
Route::get('/petugas/home', function () {
    return view('petugas/petugas/home');
});
Route::get('/petugas/profile', function () {
    return view('petugas/petugas/profile');
});
Route::get('/petugas/pengaduan/detail', function () {
    return view('petugas/petugas/detail_pengaduan');
});
Route::get('/petugas/pengaduan/verifikasi', function () {
    return view('petugas/petugas/verifikasi_pengaduan');
});
Route::get('/petugas/pengaduan/tanggapi', function () {
    return view('petugas/petugas/tanggapi_pengaduan');
});
Route::get('/petugas/tanggapan/tulis', function () {
    return view('petugas/petugas/tulis_tanggapan');
});
Route::get('/petugas/tanggapan/lihat', function () {
    return view('petugas/petugas/lihat_tanggapan');
});
Route::get('/petugas/tanggapan/edit', function () {
    return view('petugas/petugas/edit_tanggapan');
});
Route::get('/petugas/tanggapan/detail', function () {
    return view('petugas/petugas/detail_tanggapan');
});
Route::get('/petugas/tanggapan/kelola', function () {
    return view('petugas/petugas/kelola_tanggapan');
});
Route::get('/petugas/masyarakat/lihat', function () {
    return view('petugas/petugas/lihat_masyarakat');
});
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
    return view('login/masyarakat');
});
Route::get('/masyarakat/register', function () {
    return view('register/masyarakat');
});

Route::get('/petugas/login', function () {
    return view('login/petugas');
});
Route::get('/petugas/register', function () {
    return view('register/petugas');
});

//

Route::get('/welcome', function () {
    return view('welcome');
});


