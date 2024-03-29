

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>APPMK | {{ $title }} </title>
  
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('img/app/logoGarut.png')}}" type="image/x-icon">
  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
  <style>
     trix-toolbar [data-trix-button-group="file-tools"] {
              display: none;
     }
    .trix-button--icon-increase-nesting-level,
    .trix-button--icon-decrease-nesting-level{ display:none;}
  </style>
</head>

<body class="page-top">

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
       
          <!-- Content Row -->
          
          <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion  no-print" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/admin/home')}}">
    <div class="sidebar-brand-icon">
      <img src="{{ asset('img/app/logoGarut.png') }}" class="img-fluid rounded float-left" alt="Logo Garut" width="50">
    </div>
    <div class="sidebar-brand-text mx-3">APPMK <sup>Garut</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <li class="nav-item pengaturan mt-1">
    <a href="{{url('/superAdmin/profile')}}" class="nav-link">
      <i class="fas fa-fw fa-user"></i>
      <span>Profile</span>
    </a>
  </li>
  <li class="nav-item mt-n2">
    <a class="nav-link" href="{{url('/superAdmin/home')}}">
      <i class="fas fa-fw fa-home"></i>
      <span>Home</span></a>
  </li>
  <hr class="sidebar-divider my-0">
  <!-- Nav Item - Dashboard -->
 

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Interaksi
  </div>

  <!-- Nav Item - Pages Collapse Menu -->

  <li class="nav-item mt-n2">
    <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseThree">
      <i class="fas fa-fw  fa-smile"></i>
      <span class="pengaduan">Tanggapan</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded bg-gradient-primary">
        <h6 class="collapse-header">Opsi</h6>
        <a class="collapse-item bg-light" href="{{url('superAdmin/tanggapan/lihat')}}"> Lihat Tanggapan    <i class="fa fa-smile text-primary"></i></a>
      </div>
    </div>
  </li>
  <li class="nav-item mt-n2">
    <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapsefourth">
      <i class="fas fa-fw  fa-user-secret"></i>
      <span class="pengaduan">Petugas</span>
    </a>
    <div id="collapsefourth" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded bg-gradient-primary">
        <h6 class="collapse-header">Opsi</h6>
        <a class="collapse-item bg-light mb-2" href="{{ url('superAdmin/petugas/verifikasi') }}"> Verifikasi Petugas    <i class="fas fa-check text-primary"></i></a>
        <a class="collapse-item bg-light mb-2" href="{{ url('superAdmin/petugas/lihat') }}"> Lihat Petugas    <i class="fas fa-user-secret text-primary"></i></a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseFive">
      <i class="fas fa-print"></i>
      <span class="pengaduan">Laporan</span>
    </a>
    <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded bg-gradient-primary">
        <h6 class="collapse-header">Opsi</h6>
        <a class="collapse-item bg-light mb-2" href="{{ url('superAdmin/laporan/laporan_petugas') }}">Laporan Petugas <i class="fas fa-user-secret"></i></a>
        <a class="collapse-item bg-light mb-2" href="{{ url('superAdmin/laporan/laporan_tanggapan') }}">Laporan Tanggapan <i class="fas fa-smile"></i></a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->


  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Akun
  </div>

  
  
  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="{{url('/petugas/logout')}}">
      <i class="fas fa-sign-out-alt"></i>
      <span>Logout</span></a>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow  no-print">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
        </button>

        <h1 class="judul">Aplikasi Pelaporan Pengaduan Masyarakat</h1>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ session('username_petugas') }}</span>
            <img class="img-profile rounded-circle" src="{{ asset('img/app/super-admin.png') }}">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="{{url('/superAdmin/profile')}}">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown""></div>
            <a class="dropdown-item" href="{{url('/petugas/logout')}}" aria-labelledby="userDropdown">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
            </div>
        </li>

        </ul>

    </nav>
    
<div class="container-fluid">
  <img src="{{ url('img/app/LogoApp.jpg') }}" class="img-fluid no-print" alt="">
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
   

 <!-- End of Main Content -->


      <!-- Footer -->
      <footer class="sticky-footer bg-white no-print mt-6">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>DIBUAT OLEH <i class="fas fa-heart"></i> Alamahul Bayan &copy; 2023 </span>
            <a href="#">Hubungi Saya</a>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->



  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src @yield('container')
</div>

  </div>="{{asset('js/sb-admin-2.min.js')}}"></script>
  <script src="{{asset('js/script.js')}}"></script>
  
  <script src="{{ asset('js/jquery.filtertable.js') }}"></script>
</body>

</html>
<?php 
