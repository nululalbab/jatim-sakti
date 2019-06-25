@extends('multiauth::layouts.app')

@section('content')
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Daftar Pengajuan Anggaran</h4>
        <p class="card-description">
          Data tabel pencairan yang diajukan ke departemen SLA
        </p>
        <form class="" action="{{ Route('admin.cair.anggaran')}}" method="post">
        {{ csrf_field() }}

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
              <th>
                Cairkan
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
                  Rp. {{number_format($anggaran->jumlah,2,',','.')}}
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
                <input type="hidden" name="id_anggaran" value="{{$anggaran->id_anggaran}}">
                <td>
                  <button type="submit" class="btn btn-block btn-sm btn-gradient-primary">Cairkan</button>
                </td>
              </tr>
            @endforeach
            </form>
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
@endsection
