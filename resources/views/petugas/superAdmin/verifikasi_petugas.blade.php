@extends('layouts.superAdmin')
@section('container')

@php
    $i = 1;
@endphp

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800 mb-3 no-print">Verifikasi Petugas</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center bg-gradient-light text-dark">
                      <th>NO</th>
                      <th>Nama Petugas</th>
                      <th>Username Petugas</th>
                      <th>Telepon</th>
                      <th>Level</th>
                      <th>Status</th>
                      <th class="no-print" colspan="4">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr class="text-center bg-gradient-light text-dark">
                    <th>NO</th>
                    <th>Nama Petugas</th>
                      <th>Username Petugas</th>
                      <th>Telepon</th>
                      <th>Level</th>
                      <th>Status</th>
                      <th class="no-print" colspan="4">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @if (count($petugas) == 0)
                        <tr class="bg-danger text-white text-center">
                          <td colspan="7">Data Tidak Ditemukan</td>
                        </tr>
                    @endif
                    @foreach ($petugas as $row)
                    @if ($i % 2 == 0)
                    
                    <tr class="bg-light text-dark text-center">
                    <td>{{ $i++ }}</td>
                      <td>{{ $row->nama_petugas }}</td>
                      <td>{{ $row->username_petugas }}</td>
                      <td>{{ $row->telp }}</td>
                      <td>{{ $row->level }}</td>
                      <td>{{ $row->status }}</td>
                      <td class="no-print">
                        <a class="tombolVerifikasiPetugas" data-id-verifikasi="{{$row->id_petugas }}" href="{{ url('superAdmin/petugas') }}"  data-toggle="modal" data-target="#EditPetugasModal">
                            <span class="fas fa-check text-success"></span>
                        </a>
                        </td>
                        
                    </tr>
                    @else
                    
                    <tr class="bg-gradient-white text-dark text-center">
                      <td>{{ $i++ }}</td>
                      <td>{{ $row->nama_petugas }}</td>
                      <td>{{ $row->username_petugas }}</td>
                      <td>{{ $row->telp }}</td>
                      <td>{{ $row->level }}</td>
                      <td>{{ $row->status }}</td>
                        <td class="no-print">
                        <a class="tombolVerifikasiPetugas" data-id-verifikasi="{{$row->id_petugas }}" href="{{ url('superAdmin/verifikasi_petugas') }}"  data-toggle="modal" data-target="#VerifikasiPetugasModal">
                            <span class="fas fa-check text-success"></span>
                        </a>
                        </td>
                       
                    </tr>
                    @endif
                    
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

<div class="modal fade" id="VerifikasiPetugasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin Ingin <strong> Mengverifikasi </strong> petugas Ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a id="id_verifikasi" href="{{ url('/superAdmin/petugas/verifikasi')}}" class="btn btn-success">
        Ya
    </a>
      </div>
    </div>
  </div>
</div>


        @endsection