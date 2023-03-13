@extends('layouts.admin')
@section('container')
@php
   // dd($pengaduan);
    $i = 1;
@endphp

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800 mb-3 no-print">Laporan Pengaduan</h1>
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
              <h3 class="mb-4 font-weight-bold text-dark text-center">Laporan Pengaduan</h3>
              <div class="table-responsive">
                <div class="no-print">  </div>
                <table class="table table-bordered laporan no-print" width="100%" cellspacing="0">
              
                  <thead>
                    <tr class="text-center bg-gradient-light text-dark">
                      <th>NO</th>
                      <th>Tanggal Pengaduan</th>
                      <th>NIK</th>
                      <th>Judul Laporan</th>
                      <th>Alamat Pengaduan</th>
                      <th>Foto Pengaduan</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr class="text-center bg-gradient-light text-dark">
                    <th>NO</th>
                      <th>Tanggal Pengaduan</th>
                      <th>NIK</th>
                      <th>Judul Laporan</th>
                      <th>Alamat Pengaduan</th>
                      <th>Foto Pengaduan</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($pengaduan as $row)
                    @if ($i % 2 == 0)
                    <tr class="bg-gradient-white text-dark">
                      <td>{{ $i++ }}</td>
                      <td>{{ substr($row->tgl_pengaduan, 0, 10) }}</td>
                      <td>{{ $row->nik }}</td>
                      <td>{{ $row->judul_laporan }}</td>
                      <td>{{ $row->alamat_pengaduan }}</td>
                      <td><img class="rounded mx-auto d-block" src="{{ asset('img/pengaduan/nik='.$row->nik.'/'.$row->foto)  }}" alt="foto_pengaduan" height="30px" width="30px"></td>
                      <td>{{ $row->status }}</td>
                    </tr>
                    @else
                    <tr class="bg-light text-dark">
                    <td>{{ $i++ }}</td>
                    <td>{{ substr($row->tgl_pengaduan, 0, 10) }}</td>
                    <td>{{ $row->nik }}</td>
                    <td>{{ $row->judul_laporan }}</td>
                    <td>{{ $row->alamat_pengaduan }}</td>
                    <td><img class="rounded mx-auto d-block" src="{{ asset('img/pengaduan/nik='.$row->nik.'/'.$row->foto)  }}" alt="foto_pengaduan" height="30px" width="30px"></td>
                    <td>{{ $row->status }}</td>
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