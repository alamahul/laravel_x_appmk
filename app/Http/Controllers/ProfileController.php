<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function masyarakat($nik = '123456')
    {
        $masyarakat = Masyarakat::select()->where('nik', $nik)->get()->first();
        return view('masyarakat/profile', [
            "title" => "Profile",
            "level" => "Masyakarat",
            "masyarakat" => $masyarakat,
        ]);
    }
}
