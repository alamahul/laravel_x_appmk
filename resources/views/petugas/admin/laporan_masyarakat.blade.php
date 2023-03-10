@extends('layouts.admin')
@section('container')

@php
    $i = 1;
@endphp

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800 mb-3 no-print">Laporan Masyarakat</h1>
          <button class="btn btn-primary mb-2 no-print" onclick="return window.print()">
            <span class="fas fa-print text-white"></span> PRINT
        </button>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 text-center">
              <img class="mb-3" src="{{asset('img/app/logoGarut.png')}}" alt="">
              <h2 class="m-0 font-weight-bold text-dark">PEMERINTAH KABUPATEN GARUT</h2>
              <h2 class="m-0 font-weight-bold text-dark">PROVINSI JAWA BARAT</h2>
            </div>
            <div class="card-body">
              <h3 class="mb-4 font-weight-bold text-dark text-center">Laporan Masyarakat</h3>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center bg-gradient-light text-dark">
                      <th>NO</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Username</th>
                      <th>Telepon</th>
                      <th>Foto Profile</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr class="text-center bg-gradient-light text-dark">
                    <th>NO</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Username</th>
                      <th>Telepon</th>
                      <th>Foto Profile</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($masyarakat as $row)
                    @if ($i % 2 == 0)
                    <tr class="bg-gradient-white text-dark">
                      <td>{{ $i++ }}</td>
                      <td>{{ $row->nik }}</td>
                      <td>{{ $row->nama }}</td>
                      <td>{{ $row->alamat }}</td>
                      <td>{{ $row->username }}</td>
                      <td>{{ $row->telp }}</td>
                      <td><img class="rounded mx-auto d-block" src="{{ asset('img/foto_profile/nik='.$row->nik.'/'.$row->foto)  }}" alt="foto_profile" height="30px" width="30px"></td>
                    </tr>
                    @else
                    <tr class="bg-light text-dark">
                    <td>{{ $i++ }}</td>
                    <td>{{ $row->nik }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->alamat }}</td>
                    <td>{{ $row->username }}</td>
                    <td>{{ $row->telp }}</td>
                    <td><img class="rounded mx-auto d-block" src="{{ asset('img/foto_profile/nik='.$row->nik.'/'.$row->foto)  }}" alt="foto_profile" height="30px" width="30px"></td>
                    </tr>
                    @endif
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer text-right">
             <h6 class="mb-2 font-weight-bold text-dark">Laporan</h6>
             <h6 class="mb-10 font-weight-bold text-dark">Tanggal {{ date('d M Y') }}</h6><br><br><br>
             <h6 class="font-weight-bold text-dark">admin</h6>
            </div>
          </div>


        @endsection