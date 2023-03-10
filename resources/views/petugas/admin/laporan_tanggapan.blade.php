@extends('layouts.admin')
@section('container')

@php
    $i = 1;
@endphp

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800 mb-3 no-print">Laporan Petugas</h1>
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
              <h3 class="mb-4 font-weight-bold text-dark text-center">Laporan Tanggapan</h3>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center bg-gradient-light text-dark">
                      <th>NO</th>
                      <th>Tanggal Tanggapan</th>
                      <th>Tanggapan</th>
                      <th>Judul Laporan</th>
                      <th>Nama Petugas</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr class="text-center bg-gradient-light text-dark">
                    <th>NO</th>
                      <th>Tanggal Tanggapan</th>
                      <th>Tanggapan</th>
                      <th>Judul Laporan</th>
                      <th>Nama Petugas</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($tanggapan as $row)
                    @if ($i % 2 == 0)
                    <tr class="bg-gradient-white text-dark text-center">
                      <td>{{ $i++ }}</td>
                      <td>{{ substr($row->tgl_tanggapan, 0, 10) }}</td>
                      <td>{{ substr($row->tanggapan, 0, 10) }}</td>
                      <td>{{ $row->pengaduan->judul_laporan }}</td>
                      <td>{{ $row->petugas->nama_petugas }}</td>
                    </tr>
                    @else
                    <tr class="bg-light text-dark text-center">
                    <td>{{ $i++ }}</td>
                    <td>{{ substr($row->tgl_tanggapan, 0, 10) }}</td>
                    <td>{{ substr($row->tanggapan, 0, 10) }}</td>
                    <td>{{ $row->pengaduan->judul_laporan }}</td>
                    <td>{{ $row->petugas->nama_petugas }}</td>
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