@extends('layouts.Authentication')
@section('container')
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-8 col-lg-11 col-md-11">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Silahkan masukan Data Diri Anda</h1>
              </div>
              <form class="user" method="post" action="proses_register"><div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" placeholder="Masukan Nama Lengkap Anda..." name="nama" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" placeholder="Buat Password Anda..." name="password" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control form-control-user" placeholder="Masukan Nik Anda..." name="nik" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" placeholder="Masukan Alamat Anda..." name="alamat" required>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan Username Anda..." name="username" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="number" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Masukan Nomber HP Anda..." name="telp" required>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                 <i class="fas fa-sign-in-alt float-left"></i> Register
                </button>
                <hr>
                <a href="login" class="btn btn-google btn-user btn-block">
                  <i class="fas fa-registered fa-1x float-left"></i> Sudah punya Akun Silahkan Login
                </a>
              </form>
              <hr>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>

  </div>

</div>

</div>
                