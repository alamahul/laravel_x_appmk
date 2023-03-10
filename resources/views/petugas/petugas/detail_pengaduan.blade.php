@extends('layouts.petugas')
@section('container')

@php
   // dd($pengaduan);
   
                        $tgl = $pengaduan->tgl_pengaduan;
                        $tgl = substr($tgl, 0, 10); 
@endphp

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Detail Pengaduan</h1>
</div>

<div style="" class="card shadow">

  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Detail Pengaduan</h6>
  </div>
  
  <div class="card-body">
    @if ($pengaduan->status == 'proses')

    <a href="{{ url('/petugas/pengaduan/tanggapi')}}" class="btn btn-primary mb-3">
      <i class="fas fa-arrow-left"></i> Kembali ke Tanggapi Pengaduan
    </a>

    @elseif ($pengaduan->status == 'selesai')

    <a href="{{ url('/petugas/tanggapan/kelola')}}" class="btn btn-primary mb-3">
      <i class="fas fa-arrow-left"></i> Kembali ke Kelola Tanggapan
    </a>

    @else

    <a href="{{ url('/petugas/pengaduan/verifikasi')}}" class="btn btn-dark mb-3">
      <i class="fas fa-angle-double-left"></i> Kembali ke Verifikasi Pengaduan
      </a>

    @endif
    
    @if ($pengaduan->status == 'selesai')
    <a href="{{ url('/petugas/tanggapan/detail/'.$pengaduan->tanggapan->id_tanggapan)}}" class="btn btn-success mb-3">
      <i class="fas fa-smile"></i> Lihat Tanggapan
    </a>
    @else
    {{-- <a title="Pengaduan Belum Ditanggapi" class="btn btn-dark mb-3">
      <i class="fas fa-smile"></i> Lihat Tanggapan
    </a> --}}
    @endif
    @if ($pengaduan->status == '0')
    <a href="{{ url('petugas/verifikasi_pengaduan') }}"    data-toggle="modal" data-id-verifikasi="{{ $pengaduan->id_pengaduan }}" data-target="#VerifikasiPengaduanModal" class="btn btn-success mb-3 tombolVerifikasi">
      <i class="fas fa-check"></i> Verifikasi Pengaduan
    </a>
    <a data-id-tolak="{{ $pengaduan->id_pengaduan }}" href="{{ url('petugas/tolak_pengaduan') }}"  data-toggle="modal" data-target="#TolakPengaduanModal" class="btn btn-danger mb-3 tombolTolak">
      <i class="fas fa-times"></i> Tolak Pengaduan
    </a>
    @endif
    @if ($pengaduan->status == 'proses')
    <a href="{{ url('/petugas/tanggapan/tulis/'.$pengaduan->id_pengaduan)}}" class="btn btn-success mb-3">
      <i class="fas fa-reply"></i> Tanggapi Pengaduan
    </a>
    @endif
    <div class="table-responsive text-center">
      <table class="table table-bordered mt-0" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr>
            <th>Nama Pengirim</th>
            <th>NIK</th>
            <th>Tanggal Pengaduan</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td> {{ $masyarakat->nama }} </td>
            <td> {{ $pengaduan->nik }} </td>
            <td> {{ $tgl }} </td>
            <td> {{ $pengaduan->status }} </td>
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
            {{ $pengaduan->judul_laporan }}
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
           {{ $pengaduan->isi_laporan }}
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
           {{ $pengaduan->alamat_pengaduan }}
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
          <tr><td><img style="width:500px;" src="{{url('img/pengaduan/nik='.$pengaduan->nik.'/'.$pengaduan->foto)}}" class="img-fluid rounded" alt="Foto Laporan">
          </td></tr>
        </tbody>
      </table>
    </div>
    </div>
    <div class="card-footer">
    
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="VerifikasiPengaduanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin Ingin <strong> Mengverifikasi </strong> Pengaduan Ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a id="id_verifikasi" href="{{ url('/petugas/verifikasi')}}" class="btn btn-success">
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
        <a id="id_tolak" href="{{ url('/petugas/tolak')}}" class="btn btn-danger">
        Ya
    </a>
      </div>
    </div>
  </div>
</div>



@endsection


