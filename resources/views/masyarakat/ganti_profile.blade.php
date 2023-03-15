
@extends('layouts.main')
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
<div class="container-fluid">

<div class="row">
  
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ganti Profile</h1>
    </div>
</div>
<label for="img">Foto Profile</label>
<div class="form-group text-center">
    
    <input type="hidden" name="gambarLama">
    <img style="width:300px; height:300px;" src="{{asset('img/foto_profile/nik='.$masyarakat->nik.'/'.$masyarakat->foto_profile)}}"  class="img-thumbnail rounded"  alt="preview" id="target" name="img">
  </div>
  <div style="font-size:3rem;" class="text-center">

    <i class="fas fa-file-upload"></i>
  </div>

  <form class="user" method="post" enctype="multipart/form-data" action="{{url('masyarakat/proses_ganti_profile')}}">
    @csrf
    <input type="hidden" name="nikLama" value="{{ $masyarakat->nik }}">
    <div class="form-group">
        <h5>NIK :</h5>
        <input class="form-control" type="text" name="nik" id="nik" value="{{ $masyarakat->nik }}" required>
      </div>
  <div class="form-group">
      <h5>Nama :</h5>
      <input class="form-control" type="text" name="nama" id="nama" value="{{ $masyarakat->nama }}" required>
    </div>
    <div class="form-group">
      <h5>Alamat :</h5>
      <textarea  class="form-control" id="x" type="text" name="alamat" id="alamat">{{ $masyarakat->alamat }}</textarea>
    </div>
    <div class="form-group">
    <h5>Username :</h5>
        <input class="form-control" type="text" name="username" value="{{ $masyarakat->username }}" id="username" required>
    </div>
    <div class="text-center">
      
      <p>Gambar Tidak Boleh Lebih dari 1 MB</p>
     </div>
    
     
    <div class="form-group text-center">

        <input type="hidden" name="gambarLama" value="{{ $masyarakat->foto_profile }}">
      <input type="file" class="form-control" name="foto_profile" id="src" value="">


    </div>
    <div class="form-group">
      <label for="pasword">Password</label>
      <input type="password" class="form-control tgl_pengaduan" name="password" id="password" value="">
    </div>
    <div class="form-group">
        <label for="telp">Telepon</label>
        <input type="number" class="form-control tgl_pengaduan" name="telp" id="telp" value="{{ $masyarakat->telp }}">
      </div>
    <div class="form-group">
    </div>
    <button class="btn btn-success mb-5" type="submit">
      <i class="fas fa-upload"></i>
     Ganti
    </button>

    <a href="{{url('masyarakat/profile')}}" class="btn btn-secondary mb-5">
      <i class="fas fa-chevron-circle-left"></i> Kembali ke Profile
    </a>
    <?php // var_dump($_POST); var_dump($_FILES); ?>
  </form>
</div>
<script src="{{ asset('js/scriptPreviewImage.js')}}"></script>
@endsection