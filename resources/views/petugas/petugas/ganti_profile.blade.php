
@extends('layouts.admin')
@section('container')
@if($errors->any());
<div class="col-sm-12">
  <div class="alert alert-danger alert-dismissible fade show mt-2 mb-3" role="alert">
    <strong></strong> Masukan Data Diri Dengan Benar
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>
@endif
<div class="container-fluid" style="height:90%">

<div class="row">
  
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ganti Profile</h1>
    </div>
</div>

  <form class="user" method="post" enctype="multipart/form-data" action="{{url('petugas/proses_ganti_profile')}}">
    @csrf
    <input type="hidden" name="id_petugas" value="{{ $petugas->id_petugas }}">
  <div class="form-group">
      <h5>Nama :</h5>
      <input class="form-control" type="text" name="nama_petugas" id="nama_petugas" value="{{ $petugas->nama_petugas }}" required>
    </div>
    <div class="form-group">
    <h5>Username :</h5>
        <input class="form-control" type="text" name="username_petugas" value="{{ $petugas->username_petugas }}" id="username" required>
        <input class="form-control" type="hidden" name="username_petugas_lama" value="{{ $petugas->username_petugas }}" id="username" required>
    </div>
    <div class="form-group">
      <h5>Password :</h5>
          <input class="form-control" type="password" name="password" value="" id="password" required>
      </div>
    <div class="form-group">
        <label for="telp">Telepon</label>
        <input type="number" class="form-control tgl_pengaduan" name="telp" id="telp" value="{{ $petugas->telp }}">
      </div>
      
    <div class="form-group">
    </div>
    <button class="btn btn-success" type="submit">
      <i class="fas fa-upload"></i>
     Ganti
    </button>

    <a href="{{url('petugas/profile')}}" class="btn btn-secondary">
      <i class="fas fa-chevron-circle-left"></i> Kembali ke Profile
    </a>
    <?php // var_dump($_POST); var_dump($_FILES); ?>
  </form>
</div>
@endsection