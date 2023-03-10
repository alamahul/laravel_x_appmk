@extends('layouts.main')
@section('container')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Tanggapan</h1>
    </div>

<div style="" class="card shadow">

  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Tanggapan Pengaduan</h6>
  </div>
  
  <div class="card-body">
  <a href="{{ url('/masyarakat/pengaduan/lihat')}}" class="btn btn-secondary mb-3">
      <i class="fas fa-arrow-left"></i> Kembali ke Lihat Pengaduan
    </a>
      <a href="{{ url('/masyarakat/pengaduan/detail/'.$tanggapan->pengaduan->id_pengaduan)}}" class="btn btn-dark mb-3">
        <i class="fas fa-info mr-2"></i> Detail Pengaduan
      </a>
    <div class="table-responsive text-center">
      <table class="table table-bordered mt-0" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr>
            <th>Tanggal Tanggapan</th>
            <th>Judul Pengaduan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td> {{ substr($tanggapan->tgl_tanggapan, 0, 10) }} </td>
            <td> {{ $tanggapan->pengaduan->judul_laporan }} </td>
          </tr>
          <?php ?>
        </tbody>
      </table>
    </div>
    <div class="table-responsive text-center">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr><th>Tanggapan</th></tr>
        </thead>
        <tbody>
          <tr><td><p>
           {{ $tanggapan->tanggapan }}
          </p>
          </td></tr>
        </tbody>
      </table>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered mt-0" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr>
            <th colspan="3">Petugas yang Menanggapi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="1"> Nama Petugas </td>
            <td colspan="2"> {{ $tanggapan->petugas->nama_petugas }} </td>
          </tr>
          <tr>
            <td colspan="1">  Nomor Telepon </td>
            <td colspan="2"> {{ $tanggapan->petugas->telp }} </td>
          </tr>
          <tr>
            <td colspan="1"> Level</td>
            <td colspan="2"> {{ $tanggapan->petugas->level }} </td>
          </tr>
          <?php ?>
        </tbody>
      </table>
    </div>
    </div>
</div>
@endsection