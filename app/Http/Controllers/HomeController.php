<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function masyarakat()
    {
        $jumlahPengaduan['semua'] = $this->ambilJumlahPengaduan();
        $jumlahPengaduan['proses'] = $this->ambilJumlahPengaduan('proses');
        $jumlahPengaduan['selesai'] = $this->ambilJumlahPengaduan('selesai');
        //dd($jumlahPengaduan);
        return view('masyarakat/home', [
            "title" => "Home",
            "level" => "Masyarakat",
            "jumlahPengaduan" => $jumlahPengaduan

        ]);
    }
    private function ambilJumlahPengaduan($status = null)
    {
        if ($status == null) {
            $pengaduan = Pengaduan::all();
            return count($pengaduan);
        }else{
            $pengaduan = Pengaduan::select()->where('status', $status)->get();
            return count($pengaduan);
        }
    }
}
