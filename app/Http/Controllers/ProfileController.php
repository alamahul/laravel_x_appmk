<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Petugas;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function masyarakat()
    {
        $nik = session()->all()['nik'];
        $masyarakat = Masyarakat::select()->where('nik', $nik)->get()->first();
        return view('masyarakat/profile', [
            "title" => "Profile",
            "level" => "Masyakarat",
            "masyarakat" => $masyarakat,
        ]);
    }
    public function petugas()
    {
        $username = session()->all()['username_petugas'];
        $petugas = Petugas::select()->where('username_petugas', $username)->get()->first();
        return view('petugas/petugas/profile', [
            "title" => "Profile",
            "level" => "petugas",
            "petugas" => $petugas,
        ]);
    }
    public function admin()
    {
        $username = session()->all()['username_petugas'];
        $petugas = Petugas::select()->where('username_petugas', $username)->get()->first();
        return view('petugas/admin/profile', [
            "title" => "Profile",
            "level" => "Admin",
            "petugas" => $petugas,
        ]);
    }
    public function super_admin()
    {
        $username = session()->all()['username_petugas'];
        $petugas = Petugas::select()->where('username_petugas', $username)->get()->first();
        return view('petugas/superAdmin/profile', [
            "title" => "Profile",
            "level" => "SuperAdmin",
            "petugas" => $petugas,
        ]);
    }
    public function ganti_masyarakat()
    {
        $nik = session()->all()['nik'];
        $masyarakat = Masyarakat::select()->where('nik', $nik)->get()->first();
        //dd("$masyarakat");
        return view('masyarakat/ganti_profile', [
            "title" => "Profile",
            "level" => "Masyakarat",
            "masyarakat" => $masyarakat,
        ]);
    }
    public function ganti_petugas()
    {
        $username = session()->all()['username_petugas'];
        $petugas = Petugas::select()->where('username_petugas', $username)->get()->first();
        //dd("$masyarakat");
        return view('petugas/petugas/ganti_profile', [
            "title" => "Profile",
            "level" => "petugas",
            "petugas" => $petugas,
        ]);
    }
    public function ganti_super_admin()
    {
        $username = session()->all()['username_petugas'];
        $petugas = Petugas::select()->where('username_petugas', $username)->get()->first();
        //dd("$masyarakat");
        return view('petugas/superAdmin/ganti_profile', [
            "title" => "Profile",
            "level" => "SuperAdmin",
            "petugas" => $petugas,
        ]);
    }
    public function ganti_admin()
    {
        $username = session()->all()['username_petugas'];
        $petugas = Petugas::select()->where('username_petugas', $username)->get()->first();
        //dd("$masyarakat");
        return view('petugas/admin/ganti_profile', [
            "title" => "Profile",
            "level" => "admin",
            "petugas" => $petugas,
        ]);
    }
    public function proses_ganti_masyarakat(Request $request)
    {
        //dd($request);
        //dd($request['id_pengaduan']);
        //dd('img/pengaduan/nik='.$request['nik']);
        if ($request['username'] == $request['username_lama']){
            $data = $request->validate([
                'nik' => 'required',
                'nama' => 'required|max:25',
                'alamat' => ['required'],
                'username' => 'required',
                'password' => 'required|max:8|min:8',
                'telp' => 'required|numeric',
            ]);
            //dd($data);
        }else{
            $data = $request->validate([
                'nik' => 'required',
                'nama' => 'required|max:25',
                'alamat' => ['required'],
                'username' => 'required|unique:masyarakat',
                'password' => 'required|max:8|min:8',
                'telp' => 'required|numeric',
            ]);
        }

        if ($request->file('foto_profile') != null ){
        $request->validate([
            'foto_profile' => 'required'
        ]);

        $fileFoto = $request->file('foto_profile');
        $extensionFoto = $request->file('foto_profile')->getClientOriginalExtension();
        //dd($extensionFoto);
        $filename = 'foto_profile_'.md5($request->file('foto_profile')->getClientOriginalName()).date('d-m-Y').'.'.$extensionFoto;
        $location = 'img/foto_profile/nik='.$request['nik'];
        //dd($filename);
        $fileFoto->move($location,$filename);
        $data['foto_profile'] = $filename;
        if (file_exists('img/foto_profile/nik='.$request['nik'].'/'.$request['gambarLama'])) {
            unlink('img/foto_profile/nik='.$request['nik'].'/'.$request['gambarLama']);
            
        }
        //dd('img/pengaduan/nik='.$request['nik'].'/', $request['gambarLama']);
        }else{
            $data['foto_profile'] = $request['gambarLama'];
        }
        $data['nik'] = $request['nik'];
        //dd($data);

        Masyarakat::where('nik', $request['nikLama'])->update($data);
        $request->session()->flash('success', 'Profile berhasil di Ubah');
        return redirect(url('masyarakat/profile'));


    }
    public function proses_ganti_petugas(Request $request)
    {
        //dd($request);
        //dd($request['id_pengaduan']);
        //dd('img/pengaduan/nik='.$request['nik']);
        if($request['username_petugas'] == $request['username_petugas_lama']){
            $data = $request->validate([
                'id_petugas' => 'required',
                'nama_petugas' => 'required|max:25',
                'username_petugas' => 'required',
                'password' => 'required|max:8|min:8',
                'telp' => 'required|numeric',
            ]);
            //dd($data);
        }else{
            $data = $request->validate([
                'id_petugas' => 'required',
                'nama_petugas' => 'required|max:25',
                'username_petugas' => 'required|unique:Petugas',
                'password' => 'required|max:8|min:8',
                'telp' => 'required|numeric',
            ]);
           
        }
        //dd($data);


        Petugas::where('id_petugas', $data['id_petugas'])->update($data);
        $request->session()->flash('success', 'Profile berhasil di Ubah');
        return redirect(url('petugas/profile'));


    }
    public function proses_ganti_admin(Request $request)
    {
        //dd($request);
        //dd($request['id_pengaduan']);
        //dd('img/pengaduan/nik='.$request['nik']);
        if($request['username_petugas'] == $request['username_petugas_lama']){
            $data = $request->validate([
                'id_petugas' => 'required',
                'nama_petugas' => 'required|max:25',
                'username_petugas' => 'required',
                'password' => 'required|max:8|min:8',
                'telp' => 'required|numeric',
            ]);
            //dd($data);
        }else{
            $data = $request->validate([
                'id_petugas' => 'required',
                'nama_petugas' => 'required|max:25',
                'username_petugas' => 'required|unique:Petugas',
                'password' => 'required|max:8|min:8',
                'telp' => 'required|numeric',
            ]);
           
        }
        //dd($data);


        Petugas::where('id_petugas', $data['id_petugas'])->update($data);
        $request->session()->flash('success', 'Profile berhasil di Ubah');
        return redirect(url('admin/profile'));


    }
    public function proses_ganti_super_admin(Request $request)
    {
        //dd($request);
        //dd($request['id_pengaduan']);
        //dd('img/pengaduan/nik='.$request['nik']);
        if($request['username_petugas'] == $request['username_petugas_lama']){
            $data = $request->validate([
                'id_petugas' => 'required',
                'nama_petugas' => 'required|max:25',
                'username_petugas' => 'required',
                'password' => 'required|max:8|min:8',
                'telp' => 'required|numeric',
            ]);
            //dd($data);
        }else{
            $data = $request->validate([
                'id_petugas' => 'required',
                'nama_petugas' => 'required|max:25',
                'username_petugas' => 'required|unique:Petugas',
                'password' => 'required|max:8|min:8',
                'telp' => 'required|numeric',
            ]);
           
        }


        Petugas::where('id_petugas', $data['id_petugas'])->update($data);
        $request->session()->flash('success', 'Profile berhasil di Ubah');
        return redirect(url('superAdmin/profile'));


    }
}
