<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MasyarakatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
Route::get('/', [LoginController::class, 'masyarakat'])->middleware('guestApp');

// Controller Masyarakat

Route::get('/masyarakat', [HomeController::class, 'masyarakat'])->middleware('masyarakat');
Route::get('/masyarakat/home',[HomeController::class, 'masyarakat'])->middleware('masyarakat');


Route::get('/masyarakat/profile', [ProfileController::class, 'masyarakat'])->middleware('masyarakat');
Route::get('/masyarakat/ganti_profile', [ProfileController::class, 'ganti_masyarakat'])->middleware('masyarakat');
Route::post('/masyarakat/proses_ganti_profile', [ProfileController::class, 'proses_ganti_masyarakat'])->middleware('masyarakat');


Route::get('/masyarakat/pengaduan/tulis', [PengaduanController::class, 'tulis'])->middleware('masyarakat');;
Route::post('/masyarakat/pengaduan/tulis', [PengaduanController::class, 'proses_tulis'])->middleware('masyarakat');

Route::get('/masyarakat/pengaduan/edit/{id}', [PengaduanController::class, 'edit'])->middleware('masyarakat');;
Route::get('/masyarakat/pengaduan/hapus/{id}', [PengaduanController::class, 'delete'])->middleware('masyarakat');
Route::post('/masyarakat/pengaduan/edit', [PengaduanController::class, 'proses_edit'])->middleware('masyarakat');

Route::get('/masyarakat/pengaduan/lihat', [PengaduanController::class, 'lihat'])->middleware('masyarakat');;
Route::get('/masyarakat/pengaduan/lihat/verifikasi', [PengaduanController::class, 'lihatStatusVerifikasi'])->middleware('masyarakat');;
Route::get('/masyarakat/pengaduan/lihat/selesai', [PengaduanController::class, 'lihatStatusSelesai'])->middleware('masyarakat');;

Route::get('/masyarakat/pengaduan/detail/{id}', [PengaduanController::class, 'detail'])->middleware('masyarakat');
Route::get('/masyarakat/tanggapan/{id}', [TanggapanController::class, 'lihat_tanggapan'])->middleware('masyarakat');


//

// Controller Petugas

// level Petugas

Route::get('/petugas', [HomeController::class, 'petugas'])->middleware('petugas');
Route::get('/petugas/home', [HomeController::class, 'petugas'])->middleware('petugas');
Route::get('/petugas/profile', [ProfileController::class, 'petugas'])->middleware('petugas');
Route::get('/petugas/ganti_profile', [ProfileController::class, 'ganti_petugas'])->middleware('petugas');
Route::post('/petugas/proses_ganti_profile', [ProfileController::class, 'proses_ganti_petugas'])->middleware('petugas');

Route::get('/petugas/pengaduan/detail/{id}', [PengaduanController::class, 'detailbyPetugas'])->middleware('petugas');


Route::get('/petugas/pengaduan/verifikasi', [PengaduanController::class, 'verifikasiPengaduan'])->middleware('petugas');
Route::get('/petugas/verifikasi/{id}', [PengaduanController::class, 'verifikasi'])->middleware('petugas');
Route::get('/petugas/tolak/{id}', [PengaduanController::class, 'tolak'])->middleware('petugas');
Route::get('/petugas/pengaduan/tanggapi', [TanggapanController::class, 'tanggapiPengaduan'])->middleware('petugas');
Route::get('/petugas/tanggapan/tulis/{id}', [TanggapanController::class, 'tulis_tanggapan'])->middleware('petugas');
Route::post('/petugas/tanggapan/tulis', [TanggapanController::class, 'proses_tulis_tanggapan'])->middleware('petugas');
Route::get('/petugas/tanggapan/kelola', [TanggapanController::class, 'kelola_tanggapan'])->middleware('petugas');
Route::get('/petugas/tanggapan/edit/{id}', [TanggapanController::class, 'edit'])->middleware('petugas');

Route::post('/petugas/tanggapan/edit', [TanggapanController::class, 'proses_edit'])->middleware('petugas');

Route::get('/petugas/tanggapan/detail/{id}', [TanggapanController::class, 'detail'])->middleware('petugas');

Route::get('/petugas/tanggapan/hapus/{id}', [TanggapanController::class, 'hapus'])->middleware('petugas');

Route::get('/petugas/masyarakat/lihat', [MasyarakatController::class, 'lihat'])->middleware('petugas');


//

// level Admin

Route::get('/admin', [HomeController::class, 'admin'])->middleware('admin');
Route::get('/admin/home', [HomeController::class, 'admin'])->middleware('admin');
Route::get('/admin/profile', [ProfileController::class, 'admin'])->middleware('admin');

Route::get('/admin/ganti_profile', [ProfileController::class, 'ganti_admin'])->middleware('admin');
Route::post('/admin/proses_ganti_profile', [ProfileController::class, 'proses_ganti_admin'])->middleware('admin');

Route::get('/admin/pengaduan/lihat', [PengaduanController::class, 'lihatByAdmin'])->middleware('admin');
Route::get('/admin/pengaduan/detail/{id}', [PengaduanController::class, 'detailbyAdmin'])->middleware('admin');


Route::get('/admin/pengaduan/verifikasi', [PengaduanController::class, 'verifikasiPengaduanByAdmin'])->middleware('admin');

Route::get('/admin/verifikasi/{id}', [PengaduanController::class, 'verifikasiByAdmin'])->middleware('admin');
Route::get('/admin/tolak/{id}', [PengaduanController::class, 'tolakByAdmin'])->middleware('admin');

Route::get('/admin/pengaduan/tanggapi', [TanggapanController::class, 'tanggapiPengaduanByAdmin'])->middleware('admin');

Route::get('/admin/tanggapan/tulis/{id}', [TanggapanController::class, 'tulis_tanggapanByAdmin'])->middleware('admin');
Route::post('/admin/tanggapan/tulis', [TanggapanController::class, 'proses_tulis_tanggapanByAdmin'])->middleware('admin');

Route::get('/admin/tanggapan/kelola', [TanggapanController::class, 'kelola_tanggapanByAdmin'])->middleware('admin');

Route::get('/admin/tanggapan/edit/{id}', [TanggapanController::class, 'editByAdmin'])->middleware('admin');
Route::post('/admin/tanggapan/edit', [TanggapanController::class, 'proses_editByAdmin'])->middleware('admin');

Route::get('/admin/tanggapan/detail/{id}', [TanggapanController::class, 'detailByAdmin'])->middleware('admin');

Route::get('/admin/tanggapan/hapus/{id}', [TanggapanController::class, 'hapusByAdmin'])->middleware('admin');

Route::get('/admin/masyarakat/hapus/{id}', [MasyarakatController::class, 'hapus'])->middleware('admin');

Route::get('/admin/masyarakat/lihat', [MasyarakatController::class, 'lihatByAdmin'])->middleware('admin');


Route::get('/admin/laporan/laporan_pengaduan', [LaporanController::class, 'pengaduan'])->middleware('admin');
Route::get('/admin/laporan/laporan_masyarakat', [LaporanController::class, 'masyarakat'])->middleware('admin');
Route::get('/admin/laporan/laporan_tanggapan', [LaporanController::class, 'tanggapan'])->middleware('admin');




//

// level Super Admin

Route::get('/superAdmin', [HomeController::class, 'super_admin'])->middleware('super_admin');
Route::get('/superAdmin/home', [HomeController::class, 'super_admin'])->middleware('super_admin');
Route::get('/superAdmin/profile', [ProfileController::class, 'super_admin'])->middleware('super_admin');
Route::get('/superAdmin/ganti_profile', [ProfileController::class, 'ganti_super_admin'])->middleware('super_admin');
Route::post('/superAdmin/proses_ganti_profile', [ProfileController::class, 'proses_ganti_super_admin'])->middleware('super_admin');


Route::get('/superAdmin/tanggapan/lihat', [TanggapanController::class, 'lihat_tanggapanBySuperAdmin'])->middleware('super_admin');
Route::get('/superAdmin/tanggapan/hapus/{id}', [TanggapanController::class, 'hapusBySuperAdmin'])->middleware('super_admin');
Route::get('/superAdmin/tanggapan/detail/{id}', [TanggapanController::class, 'detailBySuperAdmin'])->middleware('super_admin');
Route::get('/superAdmin/tanggapan/pengaduan/{id}', [PengaduanController::class, 'detailBySuperAdmin'])->middleware('super_admin');
Route::get('/superAdmin/petugas/lihat', [PetugasController::class, 'lihat'])->middleware('super_admin');

Route::get('/superAdmin/petugas/getData/{id}', [PetugasController::class, 'ambilDataPetugas'])->middleware('super_admin');

Route::get('/superAdmin/petugas/hapus/{id}', [PetugasController::class, 'hapus'])->middleware('super_admin');
Route::post('/superAdmin/petugas/tambah', [PetugasController::class, 'tambah'])->middleware('super_admin');
Route::post('/superAdmin/petugas/ubah', [PetugasController::class, 'ubah'])->middleware('super_admin');

Route::get('/superAdmin/petugas/verifikasi', [PetugasController::class, 'verifikasi'])->middleware('super_admin');
Route::get('/superAdmin/petugas/verifikasi/{id}', [PetugasController::class, 'verifikasiPetugas'])->middleware('super_admin');


Route::get('/superAdmin/laporan/laporan_petugas', [LaporanController::class, 'petugas'])->middleware('super_admin');
Route::get('/superAdmin/laporan/laporan_tanggapan', [LaporanController::class, 'tanggapanBySuperAdmin'])->middleware('super_admin');


//

//

// Controller Login Dan Register

// Masyarakat

Route::get('/masyarakat/login', [LoginController::class, 'masyarakat'])->middleware('guestApp');
Route::get('/masyarakat/logout', [LogoutController::class, 'masyarakat']);
Route::post('/masyarakat/proses_login', [LoginController::class, 'proses_login_masyarakat'])->middleware('guestApp');
Route::get('/masyarakat/register', [RegisterController::class, 'index'])->middleware('guestApp');
Route::post('/masyarakat/proses_register', [RegisterController::class, 'store'])->middleware('guestApp');

Route::get('/petugas/login', [LoginController::class, 'petugas'])->middleware('guestApp');
Route::get('/petugas/logout', [LogoutController::class, 'petugas']);

// Petugas

Route::post('/petugas/proses_login', [LoginController::class, 'proses_login_petugas'])->middleware('guestApp');
 
Route::get('/petugas/register', [RegisterController::class, 'petugas'])->middleware('guestApp');

Route::post('/petugas/proses_register', [RegisterController::class, 'register_petugas'])->middleware('guestApp');



//

Route::get('/welcome', function () {
    return view('welcome');
});


