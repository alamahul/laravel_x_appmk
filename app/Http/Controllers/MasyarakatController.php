<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function lihat()
    {
        $masyarakat = Masyarakat::all();
        return view('petugas/petugas/lihat_masyarakat', [
            "title" => "Lihat Masyarakat",
            "level" => "Masyarakat",
            "masyarakat" => $masyarakat,
        ]);
    }
}
