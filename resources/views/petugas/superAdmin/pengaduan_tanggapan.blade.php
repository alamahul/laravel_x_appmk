@extends('layouts.superAdmin')
@section('container')

<div style="" class="card shadow">

  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Detail Pengaduan</h6>
  </div>
  
  <div class="card-body">
  <a href="{{ url('/superAdmin/tanggapan/lihat')}}" class="btn btn-dark mb-3">
    <i class="fas fa-angle-double-left"></i> Kembali ke Lihat Tanggapan
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
            <td> {{ $pengaduan->masyarakat->nama }} </td>
            <td> {{ substr($pengaduan->tgl_pengaduan, 0 ,10) }} </td>
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
          <tr><td><img style="width:500px;" src="{{ url('img/pengaduan/nik='.$pengaduan->nik.'/'.$pengaduan->foto) }}" class="img-fluid rounded" alt="Foto Laporan">
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


