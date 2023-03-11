<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
   public function lihat()
   {
    $petugas = Petugas::orWhere('level', 'admin')->orWhere('level', 'petugas')->get();
    // dd($petugas);
    return view('petugas/superAdmin/lihat_petugas', [
        "title" => "Lihat Petugas",
        "level" => "Super Admin",
        "petugas" => $petugas,
        
    ]);
   }
   public function verifikasi()
   {
    $petugas = Petugas::select()->where('status', '0')->get();
    // dd($petugas);
    return view('petugas/superAdmin/verifikasi_petugas', [
        "title" => "Verifikasi Petugas",
        "level" => "SuperAdmin",
        "petugas" => $petugas,
        
    ]);
   }
   public function verifikasiPetugas($id)
   {
    //dd($id);
    Petugas::where('id_petugas', $id)->update(['status' => 'terverifikasi']);
    session()->flash('success', 'Petugas berhasil di DiVerifikasi');
    return redirect(url('/superAdmin/petugas/verifikasi'));

   }

   public function hapus($id)
   {
    Petugas::where('id_petugas', $id)->delete();
    session()->flash('success', 'Petugas berhasil di DiHapus');
        return redirect(url('/superAdmin/petugas/lihat'));
   }

   public function ambilDataPetugas($id)
   {
    return  json_encode(Petugas::select()->where('id_petugas', $id)->get()->first());
   }
   public function tambah(Request $request)
   {
    
    //dd($request);
    $data = $request->validate([
        'nama_petugas' => 'required|min:3|max:25',
        'username_petugas' => 'required|min:3|max:25|unique:petugas',
        'telp' => 'required|numeric',
        'status' => 'required',
        'level' => 'required'
    ]);
    $data['password'] = md5($data['nama_petugas']);
    //dd($data);
    Petugas::create($data);
    $request->session()->flash('success', 'Petugas berhasil di Tambahkan Password Petugas ='.$data['password']);
    return redirect(url('superAdmin/petugas/lihat'));

   }
}
