<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\Petugas;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function masyarakat()
    {
        $jumlahPengaduan['semua'] = $this->ambilJumlahPengaduan('nik', session('nik'));
        $jumlahPengaduan['proses'] = $this->ambilJumlahPengaduan('status', 'proses', 'nik', session('nik'));
        $jumlahPengaduan['selesai'] = $this->ambilJumlahPengaduan('status', 'selesai', 'nik', session('nik'));
        //dd($jumlahPengaduan);
        return view('masyarakat/home', [
            "title" => "Home",
            "level" => "Masyarakat",
            "jumlahPengaduan" => $jumlahPengaduan

        ]);
    }
    public function petugas()
    {
        $jumlahPengaduan['semua'] = $this->ambilJumlahPengaduan();
        $jumlahPengaduan['0'] = $this->ambilJumlahPengaduan('status', '0');
        $jumlahPengaduan['proses'] = $this->ambilJumlahPengaduan('status', 'proses');
        //dd($jumlahPengaduan);
        return view('petugas/petugas/home', [
            "title" => "Home",
            "level" => "Petugas",
            "jumlahPengaduan" => $jumlahPengaduan

        ]);
    }
    public function admin()
    {
        //dd(session()->all());
        $jumlahPengaduan['semua'] = $this->ambilJumlahPengaduan();
        $jumlahPengaduan['0'] = $this->ambilJumlahPengaduan('status', '0');
        $jumlahPengaduan['proses'] = $this->ambilJumlahPengaduan('status', 'proses');
        $jumlahPengaduan['selesai'] = $this->ambilJumlahPengaduan('status', 'selesai');
        $jumlahTanggapan = $this->ambilJumlahTanggapan('id_petugas', session()->all()['id_petugas']);
        $jumlahMasyarakat = $this->ambilJumlahMasyarakat();
        

        // dd($jumlahPengaduan);
        return view('petugas/admin/home', [
            "title" => "Home",
            "level" => "Admin",
            "jumlahPengaduan" => $jumlahPengaduan,
            "jumlahTanggapan" => $jumlahTanggapan,
            "jumlahMasyarakat" => $jumlahMasyarakat

        ]);
    }
    public function super_admin()
    {
        //dd(session()->all());
        $jumlahTanggapan = $this->ambilJumlahTanggapan();
        $jumlahPetugas['semua'] = $this->ambilJumlahPetugas();
        $jumlahPetugas['0'] = $this->ambilJumlahPetugas('status', '0');
        

        // dd($jumlahPengaduan);
        return view('petugas/superAdmin/home', [
            "title" => "Home",
            "level" => "SuperAdmin",
            "jumlahTanggapan" => $jumlahTanggapan,
            "jumlahPetugas" => $jumlahPetugas

        ]);
    }
    private function ambilJumlahPengaduan($column1 = null, $value1 = null, $column2 = null, $value2 = null)
    {
        if ($column1 == null) {
            $pengaduan = Pengaduan::all();
            return count($pengaduan);
        }else{
            $pengaduan = Pengaduan::select()->where($column1, $value1)->where($column2, $value2)->get();
            return count($pengaduan);
        }
    }
    private function ambilJumlahMasyarakat($column1 = null, $value1 = null, $column2 = null, $value2 = null)
    {
        if ($column1 == null) {
            $masyarakat = Masyarakat::all();
            return count($masyarakat);
        }else{
            $masyarakat = Masyarakat::select()->where($column1, $value1)->get();
            return count($masyarakat);
        }
    }
    private function ambilJumlahTanggapan($column1 = null, $value1 = null, $column2 = null, $value2 = null)
    {
        if ($column1 == null) {
            $tanggapan = Tanggapan::all();
            return count($tanggapan);
        }elseif($column1 != null && $column2 != null){
            $tanggapan = Tanggapan::select()->where($column1, $value1)->where($column2, $value2)->get();
            return count($tanggapan);
        }else{
            $tanggapan = Tanggapan::select()->where($column1, $value1)->get();
            return count($tanggapan);
        }
    }
    private function ambilJumlahPetugas($column1 = null, $value1 = null, $column2 = null, $value2 = null)
    {
        if ($column1 == null) {
            $petugas = Petugas::all();
            return count($petugas);
        }elseif($column1 != null && $column2 != null){
            $petugas = Petugas::select()->where($column1, $value1)->where($column2, $value2)->get();
            return count($petugas);
        }else{
            $petugas = Petugas::select()->where($column1, $value1)->get();
            return count($petugas);
        }
    }
}
