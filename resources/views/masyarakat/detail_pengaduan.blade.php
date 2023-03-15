@extends('layouts.main')
@section('container')
@php
  //echo($pengaduan->isi_laporan);die;
  $tgl = $pengaduan->tgl_pengaduan;
  $tgl = substr($tgl, 0, 10);
  //dd($masyarakat);
@endphp
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

    @if ($pengaduan->status == '0' || $pengaduan->status == 'ditolak')
    <a href="{{ url('/masyarakat/pengaduan/hapus')}}" class="btn btn-danger mb-3 tombolHapus" data-id-ubah="{{$pengaduan->id_pengaduan}}" data-toggle="modal" data-target="#HapusPengaduanModal">
      <i class="fas fa-trash"></i> Hapus Pengaduan
    </a>
    @else
    <a class="btn btn-dark mb-3" title="Pengaduan sudah diproses Atau sudah Selesai">
      <i class="fas fa-trash"></i> Hapus Pengaduan
    </a>
    @endif

    @if ($pengaduan->status == '0')
    <a href="{{ url('/masyarakat/pengaduan/edit/'.$pengaduan->id_pengaduan)}}" class="btn btn-warning mb-3">
      <i class="fas fa-edit"></i> Edit Pengadaun
    </a>
    @else
    <a class="btn btn-dark mb-3" title="Pengaduan sudah diproses Atau sudah Selesai">
      <i class="fas fa-edit"></i> Edit Pengadaun
    </a>
    @endif

    <a  @if($pengaduan->status == 'selesai') href="{{ url('/masyarakat/tanggapan/'. $pengaduan->tanggapan->id_tanggapan)}}" class="btn btn-success mb-3" @else class="btn btn-dark mb-3" title="Pengaduan Belum DiTanggapi"  @endif>
      <i class="fas fa-smile"></i> Lihat Tanggapan
    </a>
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
            <td> {{ $masyarakat->nama }}  </td>
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
          <tr><td>
            {{ $pengaduan->judul_laporan }}
          
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
          <tr><td class="text-left">
            @php
                echo $pengaduan->isi_laporan; 
            @endphp
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
          <tr><td><img style="width:500px;" src="{{  url('img/pengaduan/nik='.$pengaduan->nik.'/'.$pengaduan->foto) }}" class="img-fluid rounded" alt="Foto Laporan">
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
        Apakah Anda Yakin Ingin <strong> Menghapus </strong> Pengaduan Ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a id="id_hapus" href="{{ url('/masyarakat/pengaduan/hapus/')}}" class="btn btn-danger">
        Ya
    </a>
      </div>
    </div>
  </div>
</div>



@endsection


