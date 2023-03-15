@extends('layouts.petugas')

@section('container')

<main>
        

          <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Home</h1>
    </div>
         
    <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-lg-4 col-md-12 mb-4">
                <a class="nav-link" href="#">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Pengaduan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahPengaduan['semua'] }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="far fa-clone fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                </a>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-lg-4 col-md-12 mb-4">
                <a class="nav-link" href="{{ url('petugas/pengaduan/verifikasi') }}">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengaduan Belum Diverifikasi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahPengaduan['0'] }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-exclamation fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                </a>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-lg-4 col-md-12 mb-4">
                <a class="nav-link" href="{{ url('petugas/pengaduan/tanggapi') }}">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengaduan Belum Di Tanggapi</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $jumlahPengaduan['proses'] }}</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file-medical fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                </a>
              </div>
              
            </div>
           
            
    </div>

          
</main> 

@endsection