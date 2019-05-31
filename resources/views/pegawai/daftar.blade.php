@extends('layouts.app')
@section('content')
          <!-- partial -->

              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daftar Pengajuan Anggaran</h4>
                    <p class="card-description">
                      Data tabel pengajuan yang diajukan ke departemen SLA
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Tanggal
                          </th>
                          <th>
                            User
                          </th>
                          <th>
                            Nama Pengajuan
                          </th>
                          <th>
                            Progress
                          </th>
                          <th>
                            Amount
                          </th>
                          <th>
                            COA
                          </th>
                          <th>
                            Penanggung Jawab
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td >
                          01/01/2019
                          </td>
                          <td >
                            {{-- {{Pegawai::user()->name}} --}}
                          </td>
                          <td>
                            Pengajuan

                          </td>
                          <td>
                            Validasi
                          </td>
                          <td>
                            $ 77.99
                          </td>
                          <td>
                            Mata Anggaran
                          </td>
                          <td>
                            Yuni
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            <!-- content-wrapper ends -->

@endsection
