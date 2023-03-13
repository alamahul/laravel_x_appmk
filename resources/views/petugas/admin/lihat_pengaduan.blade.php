@extends('layouts.admin')
@section('container')
@php
    $i = 1;
   // dd($pengaduan);
@endphp

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800 mb-3 no-print">Lihat Pengaduan</h1>
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="laporan" class="table table-bordered display nowrap"  width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center bg-gradient-light text-dark">
                      <th>NO</th>
                      <th>Tanggal Pengaduan</th>
                      <th>NIK</th>
                      <th>Judul Laporan</th>
                      <th>Alamat Pengaduan</th>
                      <th>Foto Pengaduan</th>
                      <th>Status</th>
                      <th class="no-print hidden" colspan="4">Aksi</th>
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
                      <th class="no-print hidden" colspan="4">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($pengaduan as $row)
                    @if ($i % 2 == 0)
                    <tr class="bg-gradient-white text-dark text-center">
                      <td>{{ $i++ }}</td>
                      <td>{{ $row->tgl_pengaduan }}</td>
                      <td>{{ $row->nik }}</td>
                      <td>{{ $row->judul_laporan }}</td>
                      <td>{{ $row->alamat_pengaduan }}</td>
                      <td><img class="rounded mx-auto d-block" src="{{ asset('img/pengaduan/nik='.$row->nik.'/'.$row->foto)  }}" alt="foto_pengaduan" height="30px" width="30px"></td>
                      <td>{{ $row->status }}</td>
                      <td class="no-print hidden"><a href="{{ url('admin/pengaduan/detail/'.$row->id_pengaduan) }}"  data-toggle="tooltip" data-placement="top" title="Detail Pengaduan">
                            <span class="fas fa-info text-info"></span>
                        </a>
                      </td>
                        <td class="no-print">
                          @if ($row->status == 'selesai')
                          <a href="{{ url('admin/tanggapan/detail/'.$row->tanggapan->id_tanggapan) }}"  data-toggle="tooltip" data-placement="top" title="Lihat Tanggapan">
                              <span class="fas fa-smile text-success"></span>
                          </a>
                          @else
                          <a title="Pengaduan Belum Ditanggapi">
                              <span class="fas fa-smile text-dark"></span>
                          </a>
                          @endif
                        </td>
                        <td>
                        <a class="tombolHapus" data-id-ubah="{{ $row->id_pengaduan }}" href="{{ url('admin/pengaduan/hapus') }}"  data-toggle="modal" data-target="#HapusPengaduanModal">
                            <span class="fas fa-trash text-danger"></span>
                        </a>
                        </td>
                    </tr>    
                    @else
                    <tr class="bg-light text-dark text-center">
                      <td>{{ $i++ }}</td>
                      <td>{{ $row->tgl_pengaduan }}</td>
                      <td>{{ $row->nik }}</td>
                      <td>{{ $row->judul_laporan }}</td>
                      <td>{{ $row->alamat_pengaduan }}</td>
                      <td><img class="rounded mx-auto d-block" src="{{ asset('img/pengaduan/nik='.$row->nik.'/'.$row->foto)  }}" alt="foto_pengaduan" height="30px" width="30px"></td>
                      <td>{{ $row->status }}</td>
                      <td class="no-print hidden"><a href="{{ url('admin/pengaduan/detail/'.$row->id_pengaduan) }}"  data-toggle="tooltip" data-placement="top" title="Detail Pengaduan">
                            <span class="fas fa-info text-info"></span>
                        </a>
                      </td>
                        <td class="no-print hidden">
                          @if ($row->status == 'selesai')
                          <a href="{{ url('admin/tanggapan/detail/'.$row->tanggapan->id_tanggapan) }}"  data-toggle="tooltip" data-placement="top" title="Lihat Tanggapan">
                              <span class="fas fa-smile text-success"></span>
                          </a>
                          @else
                          <a title="Pengaduan Belum Ditanggapi">
                              <span class="fas fa-smile text-dark"></span>
                          </a>
                          @endif
                        </td>
                        <td>
                        <a class="tombolHapus hidden" data-id-ubah="{{ $row->id_pengaduan }}" href="{{ url('admin/pengaduan/hapus') }}"  data-toggle="modal" data-target="#HapusPengaduanModal">
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

<div class="modal fade" id="HapusPengaduanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin Ingin <strong> Menghapus </strong> Pengaduan Ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a id="id_hapus" href="{{ url('/admin/pengaduan/hapus')}}" class="btn btn-danger">
        Ya
    </a>
      </div>
    </div>
  </div>
</div>


        @endsection