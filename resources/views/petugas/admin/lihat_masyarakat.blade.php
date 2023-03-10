@extends('layouts.admin')
@section('container')

@php
   // dd($masyarakat);
    $i = 1
@endphp

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800 mb-3 no-print">Lihat Masyarakat</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Masyarakat</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center bg-gradient-light text-dark">
                      <th>NO</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Username</th>
                      <th>Telp</th>
                      <th>Foto Profile</th>
                      <th colspan="2">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr class="text-center bg-gradient-light text-dark">
                    <th>NO</th>
                    <th>NIK</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Username</th>
                      <th>Telp</th>
                      <th>Foto Profile</th>
                      <th colspan="2">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($masyarakat as $row)
                    @if ($i % 2 == 0)
                    <tr class="bg-gradient-white text-dark text-center">
                      <td>{{ $i++ }}</td>
                      <td>{{ $row->nik }}</td>
                      <td>{{ $row->nama }}</td>
                      <td>{{ $row->alamat }}</td>
                      <td>{{ $row->username }}</td>
                      <td>{{ $row->telp }}</td>
                      <td>{{ $row->foto_profile }}</td>
                      <td>
                        <a href="{{ url('admin/masyarakat/hapus') }}" title="Hapus Masyarakat" class="tombol_hapus_masyarakat" data-id-hapus-masyarakat="{{ $row->nik }}" data-toggle="modal" data-target="#HapusMasyarakatModal">
                          <span class="fas fa-trash text-danger"></span>
                        </a>
                      </td>
                    </tr>
                    @else
                    <tr class="bg-light text-dark text-center">
                      <td>{{ $i++ }}</td>
                      <td>{{ $row->nik }}</td>
                      <td>{{ $row->nama }}</td>
                      <td>{{ $row->alamat }}</td>
                      <td>{{ $row->username }}</td>
                      <td>{{ $row->telp }}</td>
                      <td>{{ $row->foto_profile }}</td>
                      <td>
                      <a href="{{ url('admin/masyarakat/hapus') }}" title="Hapus Masyarakat" class="tombol_hapus_masyarakat" data-id-hapus-masyarakat="{{ $row->nik }}" data-toggle="modal" data-target="#HapusMasyarakatModal">
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
          <div class="modal fade" id="HapusMasyarakatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin Ingin <strong> Menghapus </strong> Masyarakat Ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a id="id_hapus_masyarakat" href="{{ url('/admin/masyarakat/hapus')}}" class="btn btn-danger">
        Ya
    </a>
      </div>
    </div>
  </div>
</div>
        @endsection