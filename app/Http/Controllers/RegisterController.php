<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Petugas;
use Flasher;

use Illuminate\Http\Request;

use Session;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register/masyarakat',[
            "title" => "Register",
            "level" => "masyarakat"
        ]);
    }
    public function petugas()
    {
        return view('register/petugas',[
            "title" => "Register",
            "level" => "Petugas"
        ]);
    }
    public function store(Request $request)
    {
       // dd($request->all());
    //    dd($request->session());
       $data = $request->validate([
            'nama' => 'required|max:25',
            'password' => 'required|min:5|max:25',
            'nik' => 'required|unique:masyarakat',
            'alamat' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:masyarakat'],
            'telp' => 'required|max:13',
        ]);
        $data += ['foto_profile' => '0'];
        Masyarakat::create($data);
         //dd($data);
         $request->session()->flash('success', 'Registrasi Berhasil! Silahkan Login');
        return redirect(url('masyarakat/login'));
        
    }
    public function register_petugas(Request $request)
    {
      // dd($request->all());
    //    dd($request->session());
       $data = $request->validate([
            'nama_petugas' => 'required|max:25',
            'password' => 'required|min:5|max:25',
            'username_petugas' => ['required', 'min:3', 'max:255', 'unique:petugas'],
            'telp' => 'required|max:13',
        ]);
        $data += ['level' => 'admin'];
        $data += ['status' => '0'];
        Petugas::create($data);
         //dd($data);
         $request->session()->flash('success', 'Registrasi Berhasil! Silahkan Login');
        return redirect(url('petugas/login'));
        
    }
}
