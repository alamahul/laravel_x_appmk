
@extends('layouts.petugas')
@section('container')
<div class="container-fluid" style="height:90%">

<div class="row">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Tanggapan</h1>
    </div>
</div>

  <form class="user" method="post" enctype="multipart/form-data" action="{{ url('petugas/tanggapan/edit') }}">
    @csrf
    <input type="hidden" name="id_tanggapan" value="{{ $tanggapan->id_tanggapan }}">
    <input type="hidden" name="id_pengaduan" value="{{ $tanggapan->id_pengaduan }}">
    <input type="hidden" name="id_petugas" value="{{ $tanggapan->id_petugas }}">
    <div class="form-group">
      <h5>Tanggapan</h5>
      <textarea class="form-control" name="tanggapan" id="" cols="30" rows="10"> {{ $tanggapan->tanggapan }} </textarea>
    </div>
    <div class="form-group">
      <label for="tgl_pengaduan">Tanggal Tanggapan</label>
      <input type="text" class="form-control" name="tgl_tanggapan" id="tanggal" readonly value="{{ substr($tanggapan->tgl_tanggapan, 0, 10); }}">
    </div>
    <div class="form-group">
    </div>
    <button class="btn btn-success" type="submit">
      <i class="fas fa-upload"></i>
      Edit Tanggapan
    </button>

    <a href="{{url('petugas/tanggapan/kelola')}}" class="btn btn-secondary">
      <i class="fas fa-chevron-circle-left"></i> Kembali ke Kelola Tanggapan
    </a>
    <a href="{{url('petugas/tanggapan/detail/'.$tanggapan->id_tanggapan)}}" class="btn btn-dark">
      <i class="fas fa-angle-double-left"></i> Kembali ke Detail Tanggapan
    </a>
    <?php // var_dump($_POST); var_dump($_FILES); ?>
  </form>
</div>
@endsection