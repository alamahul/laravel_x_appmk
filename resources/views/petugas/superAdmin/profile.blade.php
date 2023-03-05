@extends('layouts.superAdmin')
@section('container')
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="foto-profile">
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
      <td>@mdo</td>
    </tr>
    </tr>
    <tr class="bg-light text-dark">
      <td>Nama</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>@twitter</td>
    </tr>
    <tr class="bg-light text-dark">
      <td>Username</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <td>Telepon</td>
      <td>@twitter</td>
    </tr>
    <tr class="text-center bg-gradient-light text-dark text-weight-bold">
        <td colspan="2"><a href="#" class="card-link">Ganti Password</a></td>
    </tr>
  </tbody>
</table>
    
</div>
@endsection