@extends('multiauth::layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form Tambah COA') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.create.coa') }}" enctype="multipart/form-data" id="editProgress">
                        @csrf


                        <div class="form-group row">
                            <label for="COA" class="col-md-4 col-form-label text-md-right">{{ __('Nomor COA') }}</label>

                            <div class="col-md-6">
                                <input id="coa" type="text" class="form-control @error('coa') is-invalid @enderror" name="coa" placeholder="Masukkan Nomor COA" required autocomplete="coa" autofocus>

                                @error('coa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Jumlah Coa" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah COA') }}</label>

                            <div class="col-md-6">
                                <input id="jumlah_coa" type="text" class="form-control @error('jumlah_coa') is-invalid @enderror" name="jumlah_coa" placeholder="Masukkan Jumlah COA" required autocomplete="jumlah_coa" autofocus>

                                @error('jumlah_coa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Buat COA') }}
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
