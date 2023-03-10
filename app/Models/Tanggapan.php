<?php

namespace App\Models;

use App\Models\Pengaduan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;

    protected $table = 'tanggapan';
    protected $primaryKey = 'id_tanggapan';

    protected $fillable = [
        'id_pengaduan',
        'tgl_tanggapan',
        'tanggapan',
        'id_petugas'

    ];

    

   public function pengaduan()
   {
    return $this->belongsTo(Pengaduan::class, 'id_pengaduan', 'id_pengaduan');
   }
   public function petugas()    
   {
    return $this->belongsTo(Petugas::class, 'id_petugas', 'id_petugas');
   }

}
