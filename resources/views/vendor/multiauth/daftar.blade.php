@extends('layouts.app')
@section('content')
          <!-- partial -->

{{-- Tabel Ubah Progress --}}
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
                          <th>
                            Dokumen
                          </th>
                          <th>
                            Simpan
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td >
                          01/01/2019
                          </td>
                          <td >
                            Ulul
                          </td>
                          <td>
                            Jasa Dekorasi dan Lighting

                          </td>
                          <td>
                            <select id="progress" type="text" class="form-control @error('Ditujukan') is-invalid @enderror" name="ditujukan" value="{{ old('name') }}" required autocomplete="ditujukan" autofocus>
                              <option value="pengajuan">Pengajuan</option>
                              <option value="verifikasi">Verifikasi</option>
                              <option value="validasi">Validasi</option>
                              <option value="pencairan">Pencairan</option>
                              <option value="Lunas">Lunas</option>
                              <option value="Ditolak">Ditolak</option>
                              </select>
                          </td>
                          <td>
                            Rp 35.000.000
                          </td>
                          <td>
                            Mata Anggaran
                          </td>
                          <td>
                            Yuni
                          </td>
                          <td>
                            <button class="btn btn-block btn-sm btn-gradient-primary">Dokumen</button>
                          </td>
                          <td>

                              <button class="btn btn-block btn-sm btn-gradient-primary"><i class="mdi mdi-arrow-down-bold-circle"></i> </button>
                          </td>

                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            <!-- content-wrapper ends -->

            {{-- END Tabel Ubah Progress --}}

            {{-- Tabel Ambil Tanggung Jawab --}}
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Daftar Pengajuan Anggaran Tanpa PJ</h4>
                  <p class="card-description">
                    Data tabel pengajuan yang diajukan ke departemen SLA yang belum mendapatkan plotting penanggung jawab.
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
                        <th>
                          Dokumen
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td >
                        01/01/2019
                        </td>
                        <td >
                          Ulul
                        </td>
                        <td>
                          Jasa Dekorasi dan Lighting

                        </td>
                        <td>
                          Pengajuan
                        </td>
                        <td>
                          Rp 35.000.000
                        </td>
                        <td>
                          Mata Anggaran
                        </td>
                        <td>
                            <button class="btn btn-block btn-sm btn-gradient-primary">Ambil</button>
                        </td>
                        <td>
                          <button class="btn btn-block btn-sm btn-gradient-primary">Dokumen</button>
                        </td>

                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>

@endsection
