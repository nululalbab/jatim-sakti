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
                            COA
                          </th>
                          <th>
                            Jumlah
                          </th>
                          <th>
                            Sisa Coa
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($coa as $coa)
                          <tr>
                            <td >
                          {{$coa->coa}}
                            </td>
                            <td >
                              Rp. {{number_format($coa->jumlah_coa,2,',','.')}}
                            </td>
                            <td>
                                <a href="{{ route('coa.sisa.anggaran',$coa->coa) }}"><button class="btn btn-block btn-sm btn-gradient-primary">Sisa</button></a>
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
