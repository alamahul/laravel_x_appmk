<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function lihat()
    {
        $masyarakat = Masyarakat::all();
        return view('petugas/petugas/lihat_masyarakat', [
            "title" => "Lihat Masyarakat",
            "level" => "Petugas",
            "masyarakat" => $masyarakat,
        ]);
    }
    public function lihatByAdmin()
    {
        $masyarakat = Masyarakat::all();
        return view('petugas/admin/lihat_masyarakat', [
            "title" => "Lihat Masyarakat",
            "level" => "Admin",
            "masyarakat" => $masyarakat,
        ]);
    }
    public function hapus($nik)
    {
        Masyarakat::where('nik', $nik)->delete();
        session()->flash('success', 'Masyarakat Berhasil Dihapus');
        return redirect(url('admin/masyarakat/lihat'));
    }
}

