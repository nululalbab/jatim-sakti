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
                            Unit Kerja - Status
                          </th>
                          <th>
                            No Memo
                          </th>
                          <th>
                            Perihal
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
                              @if ($anggaran->status=="1")
                                  <button class="btn btn-block btn-sm btn-gradient-primary">Cair</button>
                                @else <button class="btn btn-block btn-sm btn-gradient-primary"> Belum Cair</button>
                              @endif
                            </td>
                            <td>
                              {{$anggaran->memo}}
                            </td>
                            <td>
                              {{$anggaran->perihal}}
                            </td>
                            <td>
                              {{$anggaran->progress}} / {{$anggaran->tanggal_progress}}
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
                            <a name="download" id="download" class="btn btn-block btn-sm btn-gradient-primary" href="../storage/file/{{$anggaran->dokumen}}" role="button" download="">Dokumen</a>
                            </td>

                          </tr>
                        @endforeach






                      </tbody>
                    </table>
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
                    "scrollY": 200,
                    "scrollX": true

                      } );
                  } );
              </script>

            <!-- content-wrapper ends -->

@endsection
