@extends('layouts.main')
@section('container')
<div class="card" style="width: 18rem;">
  <img src="{{ asset('img/foto_profile/nik='.$masyarakat->nik.'/'.$masyarakat->foto_profile) }}" class="card-img-top" alt="foto-profile">
  <div class="card-body">
    <h5 class="card-title">Profile</h5>
   </div>
   <table class="table table-bordered">
  <tbody>
    <tr class="text-center bg-gradient-light text-dark text-weight-bold">
        <td colspan="2">Data Profile</td>
    </tr>
    <tr>
      <td>NIK</td>
      <td>{{ $masyarakat->nik }}</td>
    </tr>
    </tr>
    <tr class="bg-light text-dark">
      <td>Nama</td>
      <td>{{ $masyarakat->nama }}</td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>{{ $masyarakat->alamat }}</td>
    </tr>
    <tr class="bg-light text-dark">
      <td>Username</td>
      <td>{{ $masyarakat->username }}</td>
    </tr>
    <tr>
      <td>Telepon</td>
      <td>{{ $masyarakat->telp }}</td>
    </tr>
    <tr class="text-center bg-gradient-light text-dark text-weight-bold">
        <td colspan="2"><a href="{{ url('masyarakat/ganti_profile') }}" class="card-link">Ganti Data Profile</a></td>
    </tr>
  </tbody>
</table>
</div>
@endsection