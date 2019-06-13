@extends('layouts.app')
@section('content')
          <!-- partial -->

              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daftar Pengajuan Anggaran Berdasarkan Unit</h4>
                    <p class="card-description">
                      Data tabel pengajuan yang diajukan ke departemen SLA
                    </p>
                    <div class="row">
                      @foreach ($unit as $unit)
                        <div class="col-md-4 stretch-card grid-margin">
                          <div class="card bg-gradient-danger card-img-holder text-white" >
                            <div class="card-body" >
                              <img src="{!! asset('assets/images/dashboard/circle.svg') !!}" class="card-img-absolute" alt="circle-image">
                              <h4 class="font-weight-normal mb-3">
                                {{$unit->nama_unit}}
                                <i class="mdi mdi-chart-line mdi-24px float-right"></i>

                              </h4>
                              <h2 class="mb-5">Rp. {{$unit->anggaran_unit}}</h2>
                              <a href="{{ route('daftar.anggaran.unit',$unit->id_unit) }}">Lihat Daftar Anggaran Unit</a>

                            </div>
                          </div>
                        </div>
                      @endforeach
                    </div>

                    <script>
                    $(".card-body").click(function() {
                      window.location = $(this).find("a").attr("href");
                      return false;
                    });
                    </script>


            <!-- content-wrapper ends -->

@endsection
