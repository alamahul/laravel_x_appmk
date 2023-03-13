@extends('layouts.Authentication')
@section('container')
<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-6 col-lg-8 col-md-9">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Silahkan Login untuk Mengakses Aplikasi</h1>
              </div>
              @if (session()->has('success'))
              <div class="col-sm-12">
                <div class="alert alert-success alert-dismissible fade show mt-1 mb-3" role="alert">
                  {{ session('success') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
              @endif
              @if (session()->has('failed'))
              <div class="col-sm-12">
                <div class="alert alert-danger alert-dismissible fade show mt-1 mb-3" role="alert">
                  {{ session('failed') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
              @endif
              @if (session()->has('LoginError'))
              <div class="col-sm-12">
                <div class="alert alert-danger alert-dismissible fade show mt-1 mb-3" role="alert">
                  {{ session('LoginError') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
              @endif
              <form class="user" method="post" action="{{  url('/masyarakat/proses_login')}}">
                @csrf
                <div class="form-group">
                  <input type="number" name="nik" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan NIK Anda..." required value="{{ old('nik') }}">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan Password Anda" required>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                 <i class="fas fa-sign-in-alt float-left"></i> Login
                </button>
                <hr>
                <a href="{{ url('/masyarakat/register')}}" class="btn btn-google btn-user btn-block">
                  <i class="fas fa-registered fa-1x float-left"></i> Belum punya Akun Silahkan Register
                </a>
                <a href="{{ url('/petugas/login')}}" class="btn btn-facebook btn-user btn-block">
                  <i class="fas fa-user-secret float-left"></i> Login Sebagai Petugas
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
@endsection


           