@extends('layouts.superAdmin')
@section('container')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Tanggapan</h1>
    </div>

<div style="" class="card shadow">

  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Tanggapan Pengaduan</h6>
  </div>
  
  <div class="card-body">
  <a href="{{ url('/superAdmin/tanggapan/lihat')}}" class="btn btn-secondary mb-3">
      <i class="fas fa-arrow-left"></i> Kembali ke Lihat Tanggapan
    </a>
    <a href="#" class="btn btn-danger mb-3" data-toggle="modal" data-target="#HapusTanggapanModal">
      <i class="fas fa-trash"></i> Hapus Tanggapan
    </a>
    <div class="table-responsive text-center">
      <table class="table table-bordered mt-0" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr>
            <th>Tanggal Tanggapan</th>
            <th>Pengirim Pengaduan</th>
            <th>Judul Pengaduan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td> 20 Januari 2020 </td>
            <td> masyarakat </td>
            <td> lorem ipsum </td>
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
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores aperiam repellat qui esse omnis accusantium fugiat assumenda beatae earum porro.
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
            <td colspan="2"> Alam </td>
          </tr>
          <tr>
            <td colspan="1">  Nomor Telepon </td>
            <td colspan="2"> 0899 </td>
          </tr>
          <tr>
            <td colspan="1"> Level</td>
            <td colspan="2"> petugas </td>
          </tr>
          <?php ?>
        </tbody>
      </table>
    </div>
    </div>
</div>
@endsection

<div class="modal fade" id="HapusTanggapanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin Ingin <strong> Menghapus </strong> Tanggapan Ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a href="{{ url('/superAdmin/tanggapan/hapus')}}" class="btn btn-danger">
        Ya
    </a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="TolakPengaduanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin Ingin <strong> Menolak </strong> Pengaduan Ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a href="{{ url('/petugas/tolak_pengaduan')}}" class="btn btn-danger">
        Ya
    </a>
      </div>
    </div>
  </div>
</div>