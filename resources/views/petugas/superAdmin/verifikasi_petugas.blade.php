@extends('layouts.superAdmin')
@section('container')


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
                    <tr class="bg-gradient-white text-dark">
                      <td>1</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td>0</td>
                        <td class="no-print">
                        <a data-id="" href="{{ url('superAdmin/verifikasi_petugas') }}"  data-toggle="modal" data-target="#VerifikasiPetugasModal">
                            <span class="fas fa-check text-success"></span>
                        </a>
                        </td>
                        <td>
                        <a data-id="" href="{{ url('superAdmin/tolak_petugas') }}"  data-toggle="modal" data-target="#TolakPetugasModal">
                            <span class="fas fa-times text-danger"></span>
                        </a>
                        </td>
                    </tr>
                    <tr class="bg-light text-dark">
                    <td>2</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td>0</td>
                      <td class="no-print">
                        <a data-id="" href="{{ url('superAdmin/tanggapan/pengaduan') }}"  data-toggle="modal" data-target="#EditPetugasModal">
                            <span class="fas fa-check text-success"></span>
                        </a>
                        </td>
                        <td>
                        <a data-id="" href="{{ url('superAdmin/tanggapan/hapus') }}"  data-toggle="modal" data-target="#HapusPetugasModal">
                            <span class="fas fa-times text-danger"></span>
                        </a>
                        </td>
                    </tr>
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
        <a href="{{ url('/superAdmin/verifikasi_petugas')}}" class="btn btn-success">
        Ya
    </a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="TolakPetugasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin Ingin <strong> Menolak </strong> petugas Ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a href="{{ url('/superAdmin/tolak_petugas')}}" class="btn btn-danger">
        Ya
    </a>
      </div>
    </div>
  </div>
</div>

        @endsection