@extends('layouts.superAdmin')
@section('container')

@php
  //dd($petugas);
 $i = 1;   
@endphp

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800 mb-3 no-print">Lihat Petugas</h1>
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
            </div>
            <div class="card-body">
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
              @error( 'nama_petugas' || 'username_petugas' || 'telp' || 'level' )
              <div class="col-sm-12">
                <div class="alert alert-danger alert-dismissible fade show mt-1 mb-3" role="alert">
                  {{ $message }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
              @enderror
                <button class="btn btn-primary mb-3" id="modalTambahPetugas" data-toggle="modal" data-target="#PetugasModal">
                    <span class="fas fa-plus mr-2"></span>Tambah Petugas
                </button>
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
                          @if ($row->status == 'terverifikasi')
                          <a class="modalUbahData" href="{{ url('superAdmin/petugas/ubah') }}" data-id-ubah="{{ $row->id_petugas }}"  data-toggle="modal" data-target="#PetugasModal">
                              <span class="fas fa-edit text-warning"></span>
                          </a>
                          @else
                          <a title="Petugas belum di Verifikasi">
                          <span class="fas fa-edit text-dark"></span>
                            </a>
                                @endif
                          </td>
                          <td>
                          <a class="tombol_hapus_Petugas" data-id-hapus-petugas="{{ $row->id_petugas }}"  href="{{ url('superAdmin/petugas/hapus') }}"  data-toggle="modal" data-target="#HapusPetugasModal">
                              <span class="fas fa-trash text-danger"></span>
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
                          @if ($row->status == 'terverifikasi')
                        <a class="modalUbahData" href="{{ url('superAdmin/petugas/ubah') }}" data-id-ubah="{{ $row->id_petugas }}"  data-toggle="modal" data-target="#PetugasModal">
                            <span class="fas fa-edit text-warning"></span>
                        </a>
                        @else
                        <a title="Petugas belum di Verifikasi">
                          <span class="fas fa-edit text-dark"></span>
                      </a>
                          @endif
                        </td>
                        <td>
                        <a class="tombol_hapus_Petugas" data-id-hapus-petugas="{{ $row->id_petugas }}" href="{{ url('superAdmin/petugas/hapus') }}"  data-toggle="modal" data-target="#HapusPetugasModal">
                            <span class="fas fa-trash text-danger"></span>
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

<div class="modal fade" id="HapusPetugasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin Ingin <strong> Menghapus </strong> Petugas Ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a id="id_hapus_Petugas" href="{{ url('/superAdmin/petugas/hapus')}}" class="btn btn-danger">
        Ya
    </a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="PetugasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="urlUbah" action="{{ url('superAdmin/petugas') }}">
          @csrf
          <input type="hidden" name="id_petugas" id="id_petugas_ubah" value="">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Petugas</label>
            <input type="text" class="form-control" name="nama_petugas" id="name_ubah">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Username</label>
            <input type="text" class="form-control" name="username_petugas" id="username_ubah">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Telepon</label>
            <input type="number" class="form-control" name="telp" id="telp_ubah">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Status</label>
            <input type="text" class="form-control" readonly name="status" id="telp_ubah" value="terverifikasi">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Level</label>
            <select  class="form-control" name="level" id="level_ubah">
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>
            </select>
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="tomUbah" type="submit" class="btn btn-primary"></button>
        </form>
      </div>
    </div>
  </div>
</div>

        @endsection