<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function pengaduan()
    {
        $pengaduan = Pengaduan::all();
        return view('petugas/admin/laporan_pengaduan', [
            "title" => "Laporan Pengaduan ".date('d-M-Y'),
            "level" => "Admin",
            "pengaduan" => $pengaduan,
        ]);
    }
    public function masyarakat()
    {
        $masyarakat = Masyarakat::all();
        return view('petugas/admin/laporan_masyarakat', [
            "title" => "Laporan Masyarakat ".date('d-M-Y'),
            "level" => "Admin",
            "masyarakat" => $masyarakat,
        ]);
    }
    public function tanggapan()
    {
        $tanggapan = Tanggapan::all();
        return view('petugas/admin/laporan_tanggapan', [
            "title" => "Laporan Tanggapan ".date('d-M-Y'),
            "level" => "Admin",
            "tanggapan" => $tanggapan,
        ]);
    }
}
