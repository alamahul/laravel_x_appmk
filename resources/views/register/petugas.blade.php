@extends('layouts.Authentication')
@section('container')

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <img src="{{ asset('img/app/logoApp.jpg') }}" class="img-fluid mb-3" >
                <h1 class="h4 text-gray-900 mb-4 sambutan-login">Silahkan Register</h1>
              </div>
              <form class="user" method="post" action="{{url('petugas/proses_register')}}"><div class="form-group row">
                @csrf  
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" placeholder="Masukan Nama Lengkap Anda..." name="nama_petugas" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" placeholder="Buat Password Anda..." name="password" required>
                  </div>
                  @error('nama_petugas')
                  <div class="col-sm-12">
                    <div class="alert alert-danger alert-dismissible fade show mt-2 mb-1" role="alert">
                      <strong> {{ $message }}</strong> Masukan Data Anda dengan benar
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>
                  @enderror
                  @error('password')
                  <div class="col-sm-12">
                    <div class="alert alert-danger alert-dismissible fade show mt-2 mb-n2" role="alert">
                      <strong> {{ $message }}</strong> Masukan Data Anda dengan benar
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>
                  @enderror
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan Username Anda..." name="username_petugas" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="number" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Masukan Nomber HP Anda..." name="telp" required>
                  </div>
                  @error('username_petugas')
                  <div class="col-sm-12">
                    <div class="alert alert-danger alert-dismissible fade show mt-2 mb-3" role="alert">
                      <strong> {{ $message }}</strong> Masukan Data diri Anda dengan benar
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>
                  @enderror
                  @error('telp')
                  <div class="col-sm-12">
                    <div class="alert alert-danger alert-dismissible fade show mt-2 mb-3" role="alert">
                      <strong> {{ $message }}</strong> Masukan Data diri Anda dengan benar
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>
                  @enderror
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
@endsection
