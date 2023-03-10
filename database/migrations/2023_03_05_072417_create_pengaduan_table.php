<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id('id_pengaduan');
            $table->dateTime('tgl_pengaduan');
            $table->char('nik', 16);
            $table->string('judul_laporan', 35);
            $table->text('isi_laporan');
            $table->string('alamat_pengaduan');
            $table->string('foto');
            $table->enum('status', ['0', 'ditolak', 'proses', 'selesai']);
            $table->timestamps();

            $table->foreign('nik')->references('nik')->on('masyarakat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduan');
    }
}
