<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\Petugas;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PengaduanController extends Controller
{
    public function index()
    {

    }
    public function lihat()
    {
        $pengaduan = Pengaduan::select()->where('nik', '123456')->get();
        //dd($pengaduan);
        return view('masyarakat/lihat_pengaduan', [
            "title" => "Lihat Pengaduan",
            "level" => "Masyakarat",
            "pengaduan" => $pengaduan
        ]);
    }
    public function lihatStatusVerifikasi()
    {
        $pengaduan = Pengaduan::select()->where('nik', '123456')->where('status', 'proses')->get();
        //dd($pengaduan);
        return view('masyarakat/lihat_pengaduan', [
            "title" => "Lihat Pengaduan",
            "level" => "Masyakarat",
            "pengaduan" => $pengaduan
        ]);
    }
    public function lihatStatusSelesai()
    {
        $pengaduan = Pengaduan::select()->where('nik', '123456')->where('status', 'selesai')->get();
        //dd($pengaduan);
        return view('masyarakat/lihat_pengaduan', [
            "title" => "Lihat Pengaduan",
            "level" => "Masyakarat",
            "pengaduan" => $pengaduan
        ]);
    }
    public function lihatByAdmin()
    {
        $pengaduan = Pengaduan::all();
        //dd($pengaduan);
        return view('petugas/admin/lihat_pengaduan', [
            "title" => "Lihat Pengaduan",
            "level" => "Admin",
            "pengaduan" => $pengaduan
        ]);
    }
    public function detail($id)
    {
        
        //$pengaduan = DB::table('pengaduan')->where('id_pengaduan', $id)->first();
        $pengaduan = Pengaduan::select()->where('id_pengaduan', $id)->get()->first();
        //dd($pengaduan->nik);
        // $masyarakat = DB::table('masyarakat')->where('nik', $pengaduan->nik)->first();
        $masyarakat = Masyarakat::select()->where('nik', $pengaduan->nik)->get()->first();
        return view('masyarakat/detail_pengaduan', [
            "title" => "Detail Pengaduan",
            "level" => "Masyakarat",
            "pengaduan" => $pengaduan,
            "masyarakat" => $masyarakat
        ]);
    }
    public function tulis()
    {
        return view('masyarakat/tulis_pengaduan', [
            "title" => "Tulis Pengaduan",
            "level" => "Masyakarat"
        ]);
    }
    public function edit($id)
    {
        // $pengaduan = DB::table('pengaduan')->where('id_pengaduan', $id)->first();
        $pengaduan = Pengaduan::select()->where('id_pengaduan', $id)->get()->first();
        //dd($pengaduan);
        return view('masyarakat/edit_pengaduan', [
            "title" => "Edit Pengaduan",
            "level" => "Masyakarat",
            "pengaduan" => $pengaduan
        ]);
    }
    public function delete($id)
    {
        //dd($id);
        $pengaduan = Pengaduan::select()->where('id_pengaduan', $id)->get()->first();
        //dd($pengaduan['foto']);
        //dd(url('img/'.$pengaduan['foto']));
        if (file_exists('img/'.$pengaduan['foto'])) {
            unlink('img/'.$pengaduan['foto']);
        }

            session()->flash('success', 'Pengaduan berhasil di Hapus');
        
        // $pengaduan = DB::table('pengaduan')->where('id_pengaduan', $id)->first();
        Pengaduan::where('id_pengaduan', $id)->delete();
        //dd($pengaduan);
        return redirect(url('masyarakat/pengaduan/lihat'));
    }
    public function proses_tulis(Request $request)
    {
        //dd($request->file('foto')->getClientOriginalExtension());
       // dd(session()->all());
        $nik = session()->all()['nik'];
        $data = $request->validate([
            'judul_laporan' => 'required|max:25',
            'isi_laporan' => 'required',
            'alamat_pengaduan' => ['required'],
            'tgl_pengaduan' => 'required',
        ]);
        $request->validate([
            'foto' => '|image|file|max:1024'
        ]);
        $fileFoto = $request->file('foto');
        $extensionFoto = $request->file('foto')->getClientOriginalExtension();
        //dd($extensionFoto);
        //date_default_timezone_set('Asia/Jakarta');
        //dd(date('s_i_H_d-m-Y'));
        $filename = 'foto_dari_'.$nik.'_'.md5($request->file('foto')->getClientOriginalName()).date('s_i_H_d-m-Y').'.'.$extensionFoto;
        $location = "img/pengaduan/nik=$nik/";
        //dd($filename);
        $fileFoto->move($location,$filename);
        
        
        $data['nik'] = $nik;
        $data['foto'] = $filename;
        $data['status'] = '0';
        //dd($data);
         
        Pengaduan::create($data);
        $request->session()->flash('success', 'Pengaduan berhasil di Laporkan');
        return redirect(url('masyarakat/pengaduan/lihat'));


    }
    public function proses_edit(Request $request)
    {
       // dd($request);
        //dd($request['id_pengaduan']);
        //dd('img/pengaduan/nik='.$request['nik']);
        $data = $request->validate([
            'judul_laporan' => 'required|max:25',
            'isi_laporan' => 'required',
            'alamat_pengaduan' => ['required'],
            'tgl_pengaduan' => 'required'
        ]);


        if ($request->file('foto') != null ){
        $request->validate([
            'foto' => 'required'
        ]);

        $fileFoto = $request->file('foto');
        $extensionFoto = $request->file('foto')->getClientOriginalExtension();
        //dd($extensionFoto);
        $filename = 'foto_dari_123456_'.md5($request->file('foto')->getClientOriginalName()).date('d-m-Y').'.'.$extensionFoto;
        $location = 'img/pengaduan/nik='.$request['nik'];
        //dd($filename);
        $fileFoto->move($location,$filename);
        $data['foto'] = $filename;
        if (file_exists('img/pengaduan/nik='.$request['nik'].'/'.$request['gambarLama'])) {
            unlink('img/pengaduan/nik='.$request['nik'].'/'.$request['gambarLama']);
            
        }
        //dd('img/pengaduan/nik='.$request['nik'].'/', $request['gambarLama']);
        }else{
            $data['foto'] = $request['gambarLama'];
        }
        $data['nik'] = $request['nik'];
        $data['status'] = '0';
        //dd($data);

        Pengaduan::where('id_pengaduan', $request['id_pengaduan'])->update($data);
        $request->session()->flash('success', 'Pengaduan berhasil di Ubah');
        return redirect(url('masyarakat/pengaduan/lihat'));


    }

    public function verifikasiPengaduan()
    {
        $pengaduan = Pengaduan::select()->where('status', '0')->get();
        return view('petugas/petugas/verifikasi_pengaduan', [
            "title" => "Verifikasi Pengaduan",
            "level" => "Petugas",
            "pengaduan" => $pengaduan,
        ]);
    }
    public function verifikasiPengaduanByAdmin()
    {
        $pengaduan = Pengaduan::select()->where('status', '0')->get();
        return view('petugas/admin/verifikasi_pengaduan', [
            "title" => "Verifikasi Pengaduan",
            "level" => ['Admin'],
            "pengaduan" => $pengaduan,
        ]);
    }
    public function verifikasi($id)
    {
        Pengaduan::where('id_pengaduan', $id)->update((['status' => 'proses']));
        session()->flash('success', 'Pengaduan berhasil di Verifkasi');
        return redirect(url('petugas/pengaduan/verifikasi'));
    }
    public function verifikasiByAdmin($id)
    {
        Pengaduan::where('id_pengaduan', $id)->update((['status' => 'proses']));
        session()->flash('success', 'Pengaduan berhasil di Verifkasi');
        return redirect(url('admin/pengaduan/verifikasi'));
    }
    public function tolak($id)
    {
        Pengaduan::where('id_pengaduan', $id)->update((['status' => 'ditolak']));
        session()->flash('success', 'Pengaduan berhasil di Ditolak');
        return redirect(url('petugas/pengaduan/verifikasi'));
    }
    public function tolakByAdmin($id)
    {
        Pengaduan::where('id_pengaduan', $id)->update((['status' => 'ditolak']));
        session()->flash('success', 'Pengaduan berhasil di Ditolak');
        return redirect(url('admin/pengaduan/verifikasi'));
    }
    public function detailbyPetugas($id)
    {
        
        //$pengaduan = DB::table('pengaduan')->where('id_pengaduan', $id)->first();
        $pengaduan = Pengaduan::select()->where('id_pengaduan', $id)->get()->first();
        //dd($pengaduan->nik);
        // $masyarakat = DB::table('masyarakat')->where('nik', $pengaduan->nik)->first();
        $masyarakat = Masyarakat::select()->where('nik', $pengaduan->nik)->get()->first();
        return view('petugas/petugas/detail_pengaduan', [
            "title" => "Detail Pengaduan",
            "level" => "petugas",
            "bagian" => "Verifikasi",
            "pengaduan" => $pengaduan,
            "masyarakat" => $masyarakat
        ]);
    }
    public function detailbyAdmin($id)
    {
        
        //$pengaduan = DB::table('pengaduan')->where('id_pengaduan', $id)->first();
        $pengaduan = Pengaduan::select()->where('id_pengaduan', $id)->get()->first();
        //dd($pengaduan->nik);
        // $masyarakat = DB::table('masyarakat')->where('nik', $pengaduan->nik)->first();
        $masyarakat = Masyarakat::select()->where('nik', $pengaduan->nik)->get()->first();
        return view('petugas/admin/detail_pengaduan', [
            "title" => "Detail Pengaduan",
            "level" => "Admin",
            "bagian" => "kelola_pengaduan",
            "pengaduan" => $pengaduan,
            "masyarakat" => $masyarakat
        ]);
    }
    public function detailbySuperAdmin($id)
    {
        
        //$pengaduan = DB::table('pengaduan')->where('id_pengaduan', $id)->first();
        $pengaduan = Pengaduan::select()->where('id_pengaduan', $id)->get()->first();
        //dd($pengaduan->nik);
        // $masyarakat = DB::table('masyarakat')->where('nik', $pengaduan->nik)->first();
        $masyarakat = Masyarakat::select()->where('nik', $pengaduan->nik)->get()->first();
        return view('petugas/superAdmin/pengaduan_tanggapan', [
            "title" => "Detail Pengaduan",
            "level" => "SupeAdmin",
            "bagian" => "detail_pengaduan",
            "pengaduan" => $pengaduan,
            "masyarakat" => $masyarakat
        ]);
    }
    
}