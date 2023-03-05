@extends('layouts.admin')
@section('container')
<div class="container-fluid" style="height:90%">

<div class="row">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tulis Pengaduan</h1>
    </div>
</div>

  <form class="user" method="post" enctype="multipart/form-data" action="TulisPengaduan/tulis">
    <div class="form-group">
      <h5>Tanggapan</h5>
      <textarea class="form-control" name="tanggapan" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
      <label for="tgl_pengaduan">Tanggal Pengaduan</label>
      <input type="text" class="form-control tgl_pengaduan" name="tgl_pengaduan" id="tanggal" readonly value="<?= date('Y-m-d'); ?>">
    </div>
    <div class="form-group">
    </div>
    <button class="btn btn-success" type="submit">
      <i class="fas fa-upload"></i>
      Kirim Tanggapan
    </button>

    <a href="{{url('admin/pengaduan/tanggapi')}}" class="btn btn-secondary">
      <i class="fas fa-chevron-circle-left"></i> Kembali ke Tanggapi Pengaduan
    </a>
    <a href="{{url('admin/pengaduan/detail')}}" class="btn btn-dark">
      <i class="fas fa-angle-double-left"></i> Kembali ke Detail Pengaduan
    </a>
    <?php // var_dump($_POST); var_dump($_FILES); ?>
  </form>
</div>
@endsection