@extends('layouts.superAdmin')
@section('container')
<div class="card" style="width: 18rem;">
  <img src="{{ asset('img/app/super-admin.png') }}" class="card-img-top" alt="foto-profile">
  <div class="card-body">
    <h5 class="card-title">Profile</h5>
   </div>
   <table class="table table-bordered">
  <tbody>
    <tr class="text-center bg-gradient-light text-dark text-weight-bold">
        <td colspan="2">Data Profile</td>
    </tr>
    <tr>
      <td>Nama Petugas</td>
      <td>{{ $petugas->nama_petugas }}</td>
    </tr>
    </tr>
    <tr class="bg-light text-dark">
      <td>Username</td>
      <td>{{ $petugas->username_petugas }}</td>
    </tr>
    <tr>
      <td>Telepon</td>
      <td>{{ $petugas->telp }}</td>
    </tr>
    <tr class="text-center bg-gradient-light text-dark text-weight-bold">
        <td colspan="2"><a href="{{ url('superAdmin/ganti_profile') }}" class="card-link">Ganti Data Profile</a></td>
    </tr>
  </tbody>
</table>
    
</div>
@endsection