<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Petugas;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class TanggapanController extends Controller
{
    public function tanggapiPengaduan()
    {
        $pengaduan = Pengaduan::select()->where('status', 'proses')->get();
        //dd($pengaduan['status']);
        return view('petugas/petugas/tanggapi_pengaduan', [
            "title" => "Tanggapi Pengaduan",
            "level" => "Petugas",
            "pengaduan" => $pengaduan,
        ]);
    }
    public function tanggapiPengaduanByAdmin()
    {
        $pengaduan = Pengaduan::select()->where('status', 'proses')->get();
        //dd($pengaduan['status']);
        return view('petugas/admin/tanggapi_pengaduan', [
            "title" => "Tanggapi Pengaduan",
            "level" => "admin",
            "pengaduan" => $pengaduan,
        ]);
    }
    public function tulis_tanggapan($id)
    {
        $petugas = Petugas::select()->where('id_petugas', '2')->get()->first();
        $pengaduan = Pengaduan::select()->where('id_pengaduan', $id)->get()->first();
        return view('petugas/petugas/tulis_tanggapan', [
            "title" => "Tanggapi Pengaduan",
            "level" => "Petugas",
            "pengaduan" => $pengaduan,
            "petugas" => $petugas,
        ]);
    }
    public function tulis_tanggapanByAdmin($id)
    {
        $petugas = Petugas::select()->where('id_petugas', '2')->get()->first();
        $pengaduan = Pengaduan::select()->where('id_pengaduan', $id)->get()->first();
        return view('petugas/admin/tulis_tanggapan', [
            "title" => "Tanggapi Pengaduan",
            "level" => "Petugas",
            "pengaduan" => $pengaduan,
            "petugas" => $petugas,
        ]);
    }

    public function proses_tulis_tanggapan(Request $request)
    {
        //dd($request);
        $data = $request->validate([
            'id_pengaduan' => 'required',
            'id_petugas' => 'required',
            'tanggapan' => 'required',
            'tgl_tanggapan' => 'required',
        ]);
        $id = ($data['id_pengaduan']);
        Pengaduan::where('id_pengaduan' , $id)->update(['status' => 'selesai']);
        Tanggapan::create($data);
        $request->session()->flash('success', 'Pengaduan berhasil di Ditanggapi');
        return redirect(url('petugas/pengaduan/tanggapi'));
    }
    public function proses_tulis_tanggapanByAdmin(Request $request)
    {
        //dd($request);
        $data = $request->validate([
            'id_pengaduan' => 'required',
            'id_petugas' => 'required',
            'tanggapan' => 'required',
            'tgl_tanggapan' => 'required',
        ]);
        $id = ($data['id_pengaduan']);
        Pengaduan::where('id_pengaduan' , $id)->update(['status' => 'selesai']);
        Tanggapan::create($data);
        $request->session()->flash('success', 'Pengaduan berhasil di Ditanggapi');
        return redirect(url('admin/pengaduan/tanggapi'));
    }
    public function kelola_tanggapan()
    {
        $tanggapan = Tanggapan::select()->where('id_petugas', '2')->get();
        return view('petugas/petugas/kelola_tanggapan', [
            "title" => "Kelola Tanggapan",
            "level" => "Petugas",
            "tanggapan" => $tanggapan,
        ]);
    }
    public function kelola_tanggapanByAdmin()
    {
        $tanggapan = Tanggapan::select()->where('id_petugas', '2')->get();
        return view('petugas/admin/kelola_tanggapan', [
            "title" => "Kelola Tanggapan",
            "level" => "Admin",
            "tanggapan" => $tanggapan,
        ]);
    }
    public function lihat_tanggapanBySuperAdmin()
    {
        $tanggapan = Tanggapan::all();
        return view('petugas/superAdmin/lihat_tanggapan', [
            "title" => "lihat Tanggapan",
            "level" => "SuperAdmin",
            "tanggapan" => $tanggapan,
        ]);
    }
    public function detail($id)
    {
        $tanggapan = Tanggapan::select()->where('id_tanggapan', $id)->get()->first();
        return view('petugas/petugas/detail_tanggapan', [
            "title" => "Detail Tanggapan",
            "level" => "Petugas",
            "tanggapan" => $tanggapan,
        ]);
    }
    public function detailByAdmin($id)
    {
        $tanggapan = Tanggapan::select()->where('id_tanggapan', $id)->get()->first();
        return view('petugas/admin/detail_tanggapan', [
            "title" => "Detail Tanggapan",
            "level" => "Admin",
            "tanggapan" => $tanggapan,
        ]);
    }
    public function detailBySuperAdmin($id)
    {
        $tanggapan = Tanggapan::select()->where('id_tanggapan', $id)->get()->first();
        return view('petugas/superAdmin/detail_tanggapan', [
            "title" => "Detail Tanggapan",
            "level" => "SuperAdmin",
            "tanggapan" => $tanggapan,
        ]);
    }
    public function lihat_tanggapan($id)
    {
        $tanggapan = Tanggapan::select()->where('id_tanggapan', $id)->get()->first();
        return view('masyarakat/tanggapan_pengaduan', [
            "title" => "Tanggapan Pengaduan",
            "level" => "Masyakarat",
            "tanggapan" => $tanggapan,
        ]);
    }
    public function hapus($id)
    {
        //dd($id);
        $tanggapan = Tanggapan::select()->where('id_tanggapan', $id)->get()->first();
        //dd($pengaduan['foto']);
        //dd(url('img/'.$pengaduan['foto']));

            session()->flash('success', 'Tanggapan berhasil di Hapus');
        Pengaduan::where('id_pengaduan', $tanggapan['id_pengaduan'])->update(["status" => "proses"]);
        // $pengaduan = DB::table('pengaduan')->where('id_pengaduan', $id)->first();
        Tanggapan::where('id_tanggapan', $id)->delete();
        //dd($pengaduan);
        return redirect(url('petugas/tanggapan/kelola'));
    }
    public function hapusByAdmin($id)
    {
        //dd($id);
        $tanggapan = Tanggapan::select()->where('id_tanggapan', $id)->get()->first();
        //dd($pengaduan['foto']);
        //dd(url('img/'.$pengaduan['foto']));

            session()->flash('success', 'Tanggapan berhasil di Hapus');
        Pengaduan::where('id_pengaduan', $tanggapan['id_pengaduan'])->update(["status" => "proses"]);
        // $pengaduan = DB::table('pengaduan')->where('id_pengaduan', $id)->first();
        Tanggapan::where('id_tanggapan', $id)->delete();
        //dd($pengaduan);
        return redirect(url('admin/tanggapan/kelola'));
    }
    public function hapusBySuperAdmin($id)
    {
        //dd($id);
        $tanggapan = Tanggapan::select()->where('id_tanggapan', $id)->get()->first();
        //dd($pengaduan['foto']);
        //dd(url('img/'.$pengaduan['foto']));

            session()->flash('success', 'Tanggapan berhasil di Hapus');
        Pengaduan::where('id_pengaduan', $tanggapan['id_pengaduan'])->update(["status" => "proses"]);
        // $pengaduan = DB::table('pengaduan')->where('id_pengaduan', $id)->first();
        Tanggapan::where('id_tanggapan', $id)->delete();
        //dd($pengaduan);
        return redirect(url('superAdmin/tanggapan/lihat'));
    }
    public function edit($id)
    {
        
        $tanggapan = Tanggapan::select()->where('id_tanggapan', $id)->get()->first();
        // dd($tanggapan);
        return view('petugas/petugas/edit_tanggapan', [
            "title" => "Edit Tanggapan",
            "level" => "Petugas",
            "tanggapan" => $tanggapan,
        ]);
    }
    public function editByAdmin($id)
    {
        
        $tanggapan = Tanggapan::select()->where('id_tanggapan', $id)->get()->first();
        // dd($tanggapan);
        return view('petugas/admin/edit_tanggapan', [
            "title" => "Edit Tanggapan",
            "level" => "Admin",
            "tanggapan" => $tanggapan,
        ]);
    }
    public function proses_edit(Request $request)
    {
      $data = $request->validate([
            'id_tanggapan' => 'required',
            'id_pengaduan' => 'required',
            'id_petugas' => 'required',
            'tanggapan' => 'required',
            'tgl_tanggapan' => 'required',
        ]);
        //dd($data);
        $id = $data['id_tanggapan'];
        Tanggapan::where('id_tanggapan', $id)->update(["tanggapan" => $data['tanggapan'],"tgl_tanggapan" => $data['tgl_tanggapan']]);
        $request->session()->flash('success', 'Tanggapan berhasil di DiUbah');
        return redirect(url('petugas/tanggapan/kelola'));
    }
    public function proses_editByAdmin(Request $request)
    {
      $data = $request->validate([
            'id_tanggapan' => 'required',
            'id_pengaduan' => 'required',
            'id_petugas' => 'required',
            'tanggapan' => 'required',
            'tgl_tanggapan' => 'required',
        ]);
        //dd($data);
        $id = $data['id_tanggapan'];
        Tanggapan::where('id_tanggapan', $id)->update(["tanggapan" => $data['tanggapan'],"tgl_tanggapan" => $data['tgl_tanggapan']]);
        $request->session()->flash('success', 'Tanggapan berhasil di DiUbah');
        return redirect(url('admin/tanggapan/kelola'));
    }
    
}
