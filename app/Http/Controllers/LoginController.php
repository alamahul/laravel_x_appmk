<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function masyarakat()
    {
        return view('login/masyarakat',[
            "title" => "Login",
            "level" => "Masyarakat"
        ]);
    }
    public function petugas()
    {
        return view('login/petugas',[
            "title" => "Login",
            "level" => "Petugas"
        ]);
    }
    public function proses_login_petugas(Request $request)
    {
        $data = $request->validate([
            "username" => "required|",
            "password" => "required|"
        ]);
        $username = $data['username'];
        $password = $data['password'];
        $petugas = Petugas::select()->where('username_petugas',$username)->where('password',$password)->get();
        if  (count($petugas) > 0){
            $request->session()->regenerate();
            session()->put('id_petugas', $petugas->first()->id_petugas);
            session()->put('status', $petugas->first()->status);
            session()->put('level', $petugas->first()->level);
            session()->put('password', $petugas->first()->password);
            session()->put('username_petugas', $petugas->first()->username_petugas);
            session()->flash('success', 'Anda Berhasil Login');
            if(session()->all()['level'] == 'petugas' ){ return redirect(url('/petugas/home')); }
            if(session()->all()['level'] == 'admin' ){ return redirect(url('/admin/home')); }
            if(session()->all()['level'] == 'super_admin' ){ return redirect(url('/superAdmin/home')); }
           
        } 
    }
    public function proses_login_masyarakat(Request $request)   
    {
        //dd($request);
        $data = $request->validate([
            "nik" => "required|numeric",
            "password" => "required|"
        ]);
        $nik = $data['nik'];
        $password = $data['password'];
        $masyarakat = Masyarakat::select()->where('nik',$nik)->where('password',$password)->get();
        //dd("$masyarakat");
        if  (count($masyarakat) > 0){
            $request->session()->regenerate();
            session()->put('nik', $masyarakat->first()->nik);
            session()->put('nama', $masyarakat->first()->nama);
            session()->put('password', $masyarakat->first()->password);
            session()->put('username', $masyarakat->first()->username);
            session()->put('foto_profile', $masyarakat->first()->foto_profile);
            session()->save();
            session()->flash('success', 'Anda Berhasil Login');
            return redirect(url('/masyarakat/home'));
        } 
        return back()->with('LoginError', 'Login Gagal!');

    }
}
