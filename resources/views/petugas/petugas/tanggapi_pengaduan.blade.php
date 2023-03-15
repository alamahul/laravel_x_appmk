@extends('layouts.petugas')
@section('container')


@php
    $i = 1;
    //dd($pengaduan);
@endphp

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800 mb-3 no-print">Tanggapi Pengaduan</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
            </div>
            <div class="card-body">

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center bg-gradient-light text-dark">
                      <th>NO</th>
                      <th>Tanggal Pengaduan</th>
                      <th>NIK</th>
                      <th>Judul Laporan</th>
                      <th>Alamat Pengaduan</th>
                      <th>Foto Pengaduan</th>
                      <th>Status</th>
                      <th class="no-print" colspan="3">Aksi</th>
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
                      <th class="no-print" colspan="3">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($pengaduan as $row)
                    @php
                        $tgl = $row->tgl_pengaduan;
                        $tgl = substr($tgl, 0, 10);                        
                    @endphp
                    @if ($i % 2 == 0)
                    <tr class="bg-light text-dark text-center">
                      <td>{{ $i++  }}</td>
                      <td> {{ $tgl  }}</td>
                      <td> {{ $row->nik }} </td>
                      <td>{{ $row->judul_laporan  }}</td>
                      <td>{{ $row->alamat_pengaduan }}</td>
                      <td><img class="rounded mx-auto d-block" src="{{ asset('img/pengaduan/nik='.$row->nik.'/'.$row->foto)  }}" alt="foto_pengaduan" height="30px" width="30px"></td>
                      <td>{{ $row->status  }}</td>
                      <td class="no-print"><a href="{{ url('petugas/pengaduan/detail/'.$row->id_pengaduan) }}"  data-toggle="tooltip" data-placement="top" title="Detail Pengaduan">
                        <span class="fas fa-info text-info"></span>
                    </a>
                  </td>
                  <td class="no-print"><a href="{{ url('petugas/tanggapan/tulis/'.$row->id_pengaduan) }}" data-toggle="tooltip" data-placement="top" title="Tanggapi Pengaduan">
                        <span class="fas fa-reply text-success"></span>
                    </a>
                  </td> 
                </tr>
                @else 
                    <tr class="bg-gradient-white text-dark text-center">
                      <td>{{ $i++  }}</td>
                      <td> {{ $tgl  }}</td>
                      <td> {{ $row->nik }} </td>
                      <td>{{ $row->judul_laporan  }}</td>
                      <td>{{ $row->alamat_pengaduan }}</td>
                      <td><img class="rounded mx-auto d-block" src="{{ asset('img/pengaduan/nik='.$row->nik.'/'.$row->foto)  }}" alt="foto_pengaduan" height="30px" width="30px"></td>
                      <td>{{ $row->status  }}</td>
                      <td class="no-print"><a href="{{ url('petugas/pengaduan/detail/'.$row->id_pengaduan) }}"  data-toggle="tooltip" data-placement="top" title="Detail Pengaduan">
                        <span class="fas fa-info text-info"></span>
                    </a>
                  </td>
                  <td class="no-print"><a href="{{ url('petugas/tanggapan/tulis/'.$row->id_pengaduan) }}" data-toggle="tooltip" data-placement="top" title="Tanggapi Pengaduan">
                        <span class="fas fa-reply text-success"></span>
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

<div class="modal fade" id="VerifikasiPengaduanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin Ingin <strong> Mengverifikasi </strong> Pengaduan Ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a href="{{ url('/admin/verifikasi_pengaduan')}}" class="btn btn-success">
        Ya
    </a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="TolakPengaduanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin Ingin <strong> Menolak </strong> Pengaduan Ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a href="{{ url('/admin/tolak_pengaduan')}}" class="btn btn-danger">
        Ya
    </a>
      </div>
    </div>
  </div>
</div>

        @endsection