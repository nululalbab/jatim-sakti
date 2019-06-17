@extends('multiauth::layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form Edit Progress Anggaran') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.edit.anggaran') }}" enctype="multipart/form-data" id="editProgress">
                        @csrf


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">No Dokumen</label>

                            <div class="col-md-6">
                                <h4 for="name" class="col-md-8 text-md-right">{{$anggaran[0]->dokumen}}</h4>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">No Invoice</label>

                            <div class="col-md-6">
                                <h4 for="name" class="col-md-8  text-md-right">{{$anggaran[0]->invoice}}</h4>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="perihal" class="col-md-4 col-form-label text-md-right">{{ __('Perihal') }}</label>

                            <div class="col-md-6">
                              <h4 for="name" class="col-md-8  text-md-right">{{$anggaran[0]->perihal}}</h4>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="progress" class="col-md-4 col-form-label text-md-right">{{ __('Progress') }}</label>

                            <div class="col-md-6 ">
                                <select class="form-control form-control-sm" name="progress" form="editProgress">
                                  <option value="Approval">Approval</option>
                                  <option value="Validasi">Validasi</option>
                                  <option value="Settlement">Settlement</option>
                                  <option value="Cancel">Cancel</option>
                                  <option value="Reject">Reject</option>
                                </select>
                                @error('progress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Keterangan" class="col-md-4 col-form-label text-md-right">{{ __('Keterangan') }}</label>

                            <div class="col-md-6">
                                <input id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{$anggaran[0]->keterangan}}" required autocomplete="keterangan" autofocus>

                                @error('keterangan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jumlah" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah') }}</label>

                            <div class="col-md-6">
                              <h4 for="name" class="col-md-8  text-md-right">{{$anggaran[0]->jumlah}}</h4>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="coa" class="col-md-4 col-form-label text-md-right">{{ __('COA') }}</label>

                            <div class="col-md-6">
                              <h4 for="name" class="col-md-8  text-md-right">{{$anggaran[0]->coa}}</h4>
                            </div>
                        </div>

                        <input type="hidden" name="id_anggaran" value="{{$anggaran[0]->id_anggaran}}">



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
