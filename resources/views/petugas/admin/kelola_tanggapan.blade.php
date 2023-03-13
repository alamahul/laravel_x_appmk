@extends('layouts.admin')
@section('container')
@php
//dd($tanggapan);
$i = 1;
@endphp
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800 mb-3 no-print">Kelola Tanggapan</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Tanggapan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center bg-gradient-light text-dark">
                      <th>NO</th>
                      <th>Tanggal Tanggapan</th>
                      <th>Tanggapan</th>
                      <th>Judul Laporan</th>
                      <th>Nama Petugas</th>
                      <th class="no-print" colspan="4">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr class="text-center bg-gradient-light text-dark">
                    <th>NO</th>
                      <th>Tanggal Tanggapan</th>
                      <th>Tanggapan</th>
                      <th>Judul Laporan</th>
                      <th>Nama Petugas</th>
                      <th class="no-print" colspan="4">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($tanggapan as $row)
                    @php
                    $tgl = $row->tgl_tanggapan;
                    $tgl = substr($tgl, 0, 10);                        
                    @endphp
                      @if ($i % 2 == 0)
                    <tr class="bg-gradient-white text-dark text-center">
                      <td>{{ $i++ }}</td>
                      <td>{{ $tgl }}</td>
                      <td>{{ substr($row->tanggapan, 0, 100) }}</td>
                      <td>{{ $row->pengaduan->judul_laporan }}</td>
                      <td>{{ $row->petugas->nama_petugas }}</td>
                      <td class="no-print"><a href="{{ url('admin/pengaduan/detail/'.$row->pengaduan->id_pengaduan) }}"  data-toggle="tooltip" data-placement="top" title="Lihat Pengaduan">
                            <span class="fas fa-info text-info"></span>
                        </a>
                      </td>
                        <td class="no-print">
                        <a href="{{ url('admin/tanggapan/detail/'.$row->id_tanggapan) }}"  data-toggle="tooltip" data-placement="top" title="Detail Tanggapan">
                            <span class="fas fa-smile text-success"></span>
                        </a>
                        </td>
                        <td class="no-print">
                        <a href="{{ url('admin/tanggapan/edit/'.$row->id_tanggapan) }}"  data-toggle="tooltip" data-placement="top" title="Edit Tanggapan">
                            <span class="fas fa-edit text-warning"></span>
                        </a>
                        </td>
                        <td>
                        <a href="{{ url('admin/tanggapan/hapus') }}" class="tombol_hapus_tanggapan" data-id-hapus-tanggapan="{{ $row->id_tanggapan }}" data-toggle="modal" data-target="#HapusTanggapanModal">
                            <span class="fas fa-trash text-danger"></span>
                        </a>
                        </td>
                    </tr>
                    @else
                    <tr class="bg-light text-dark text-center">
                      <td>{{ $i++ }}</td>
                      <td>{{ $tgl }}</td>
                      <td>{{ substr($row->tanggapan, 0, 100) }}</td>
                      <td>{{ $row->pengaduan->judul_laporan }}</td>
                      <td>{{ $row->petugas->nama_petugas }}</td>
                      <td class="no-print"><a href="{{ url('admin/pengaduan/detail/'.$row->pengaduan->id_pengaduan) }}"  data-toggle="tooltip" data-placement="top" title="Lihat Pengaduan">
                            <span class="fas fa-info text-info"></span>
                        </a>
                      </td>
                        <td class="no-print">
                        <a href="{{ url('admin/tanggapan/detail/'.$row->id_tanggapan) }}"  data-toggle="tooltip" data-placement="top" title="Detail Tanggapan">
                            <span class="fas fa-smile text-success"></span>
                        </a>
                        </td>
                        <td class="no-print">
                        <a href="{{ url('admin/tanggapan/edit/'.$row->id_tanggapan) }}"  data-toggle="tooltip" data-placement="top" title="Edit Tanggapan">
                            <span class="fas fa-edit text-warning"></span>
                        </a>
                        </td>
                        <td>
                        <a href="{{ url('admin/tanggapan/hapus') }}" class="tombol_hapus_tanggapan" data-id-hapus-tanggapan="{{ $row->id_tanggapan }}"  data-toggle="modal" data-target="#HapusTanggapanModal">
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
          <div class="modal fade" id="HapusTanggapanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin Ingin <strong> Menghapus </strong> Tanggapan Ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a id="id_hapus_tanggapan" href="{{ url('/admin/tanggapan/hapus')}}" class="btn btn-danger">
        Ya
    </a>
      </div>
    </div>
  </div>
</div>
        @endsection