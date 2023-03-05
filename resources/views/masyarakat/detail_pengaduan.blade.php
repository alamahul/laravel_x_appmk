@extends('layouts.main')
@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Pengaduan</h1>
    </div>
<div style="" class="card shadow">

  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
  </div>
  
  <div class="card-body">
  <a href="{{ url('/masyarakat/pengaduan/lihat')}}" class="btn btn-secondary mb-3">
      <i class="fas fa-arrow-left"></i> Kembali ke Lihat Pengaduan
    </a>
    <a href="{{ url('/masyarakat/pengaduan/hapus')}}" class="btn btn-danger mb-3" data-toggle="modal" data-target="#HapusPengaduanModal">
      <i class="fas fa-trash"></i> Hapus Pengaduan
    </a>
    <a href="{{ url('/masyarakat/pengaduan/edit')}}" class="btn btn-warning mb-3">
      <i class="fas fa-edit"></i> Edit Pengadaun
    </a>
    <a href="{{ url('/masyarakat/tanggapan')}}" class="btn btn-success mb-3">
      <i class="fas fa-smile"></i> Lihat Tanggapan
    </a>
    <div class="table-responsive text-center">
      <table class="table table-bordered mt-0" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr>
            <th>Nama Pengirim</th>
            <th>Tanggal Pengaduan</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td> masyarakat </td>
            <td> 20 Januari 2002 </td>
            <td> proses </td>
          </tr>
          <?php ?>
        </tbody>
      </table>
    </div>
    <div class="table-responsive text-center">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr><th>Judul Laporan</th></tr>
        </thead>
        <tbody>
          <tr><td><p>
            Lorem ipsum dolor, 
          </p>
          </td></tr>
        </tbody>
      </table>
    </div>
    <div class="table-responsive text-center">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr><th>Isi Laporan</th></tr>
        </thead>
        <tbody>
          <tr><td><p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptate iusto quaerat? Qui quae debitis nostrum dolorum ullam fugit odio soluta cum quasi, eius inventore impedit reiciendis ducimus consectetur ab velit dolor corporis nihil rem sed nulla autem est nisi! Dolores odit nihil deleniti temporibus sapiente autem error et voluptatum.
          </p>
          </td></tr>
        </tbody>
      </table>
    </div>
    <div class="table-responsive text-center">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr><th>Alamat Pengaduan</th></tr>
        </thead>
        <tbody>
          <tr><td><p>
           Cikarag
          </p>
          </td></tr>
        </tbody>
      </table>
    </div>
    <div class="table-responsive text-center">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr><th>Foto Laporan</th></tr>
        </thead>
        <tbody>
          <tr><td><img style="width:500px;" src="img/" class="img-fluid rounded" alt="Foto Laporan">
          </td></tr>
        </tbody>
      </table>
    </div>
    </div>
    <div class="card-footer">
    
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="HapusPengaduanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin Ingin menghapus Pengaduan Ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a href="{{ url('/masyarakat/pengaduan/lihat')}}" class="btn btn-danger">
        Ya
    </a>
      </div>
    </div>
  </div>
</div>



@endsection


