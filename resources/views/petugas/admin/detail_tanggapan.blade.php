@extends('layouts.admin')
@section('container')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Tanggapan</h1>
    </div>

<div style="" class="card shadow">

  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Tanggapan Pengaduan</h6>
  </div>
  
  <div class="card-body">
  <a href="{{ url('/admin/tanggapan/kelola')}}" class="btn btn-primary mb-3">
      <i class="fas fa-arrow-left"></i> Kembali ke kelola Tanggapan
    </a>
    <a href="{{ url('/admin/pengaduan/detail/'.$tanggapan->pengaduan->id_pengaduan )}}" class="btn btn-dark mb-3">
      <i class="fas fa-info mr-2"></i> Detail Pengaduan
    </a>

    @if ($tanggapan->pengaduan->status == 'selesai')
    <a href="{{ url('/admin/tanggapan/hapus')}}" class="btn btn-danger mb-3 tombol_hapus_tanggapan" data-id-hapus-tanggapan="{{ $tanggapan->id_tanggapan }}" data-toggle="modal" data-target="#HapusTanggapanModal">
      <i class="fas fa-trash"></i> Hapus Tanggapan
    </a>
    <a class="btn btn-warning mb-3" href="{{ url('admin/tanggapan/edit/'.$tanggapan->id_tanggapan) }}"  data-toggle="tooltip" data-placement="top" title="Edit Tanggapan">
      <i class="fas fa-edit mr-2"></i>Edit Tanggapan
   </a>
    @endif

    <div class="table-responsive text-center">
      <table class="table table-bordered mt-0" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr>
            <th>Tanggal Tanggapan</th>
            <th>Judul Laporan</th>
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
        <a id="id_hapus_tanggapan" href="{{ url('/admin/tanggapan/hapus')}}" class="btn btn-danger">
        Ya
    </a>
      </div>
    </div>
  </div>
</div>
@endsection