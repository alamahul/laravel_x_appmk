<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function masyarakat()
    {
        session()->invalidate();
        session()->flash('success', 'Logout Berhasil');
        return redirect(url('masyarakat/login'));
    }
    public function petugas()
    {
        session()->invalidate();
        session()->flash('success', 'Logout Berhasil');
        return redirect(url('petugas/login'));
    }
}
