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
                    <table id="tabeldaftar" class="table display nowrap" style="width:100%">
                      <thead>
                        <tr>
                          <th>
                            Tanggal
                          </th>
                          <th>
                            User
                          </th>
                          <th>
                            Unit Kerja
                          </th>
                          <th>
                            No Dokumen
                          </th>
                          <th>
                            No Invoice
                          </th>
                          <th>
                            Perihal
                          </th>
                          <th>
                            Progress
                          </th>
                          <th>
                            Tanggal Progress
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
                            Keterangan
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($anggaran as $anggaran)
                          <tr>
                            <td >
                          {{$anggaran->tanggal_anggaran}}
                            </td>
                            <td >
                              {{$anggaran->user->name}}
                            </td>
                            <td>
                              {{$anggaran->user->unit->nama_unit}}
                            </td>
                            <td>
                              {{$anggaran->dokumen}}
                            </td>
                            <td>
                              {{$anggaran->invoice}}
                            </td>
                            <td>
                              {{$anggaran->perihal}}
                            </td>
                            <td>
                              @if ($anggaran->progress==null)
                                  <button class="btn btn-block btn-sm btn-gradient-primary">Belum Diproses</button>
                                @else <button class="btn btn-block btn-sm btn-gradient-primary">{{$anggaran->progress}}</button>
                              @endif
                            </td>
                            <td>
                              {{$anggaran->tanggal_progress}}
                            </td>
                            <td>
                              {{$anggaran->jumlah}}
                            </td>
                            <td>
                              {{$anggaran->coa}}
                            </td>
                            <td>
                              @if (!empty($anggaran->admin))
                              {{$anggaran->admin->name}} {{$anggaran->admin->id_role}}
                              @endif

                            </td>
                            <td>
                            {{$anggaran->keterangan}}
                            </td>

                          </tr>
                        @endforeach

                      </tbody>
                    </table>
                    {{-- <h2>Total Anggaran Rp.  {{$totalAnggaran}}</h2> --}}
                  </div>
                </div>
              </div>



              <script>


              $(document).ready(function() {
                $('#tabeldaftar').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                    'copy', 'csv', 'excel', 'pdf',
                    ],
                    "scrollY": 500,
                    "scrollX": true

                      } );
                  } );
              </script>

            <!-- content-wrapper ends -->

@endsection
