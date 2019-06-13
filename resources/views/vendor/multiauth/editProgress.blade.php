@extends('multiauth::layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form Edit Progress Anggaran') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.edit.anggaran') }}" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Memo</label>

                            <div class="col-md-6">
                                <input id="memo" type="text" class="form-control @error('Nomor Memo') is-invalid @enderror" name="memo" value="{{$anggaran[0]->memo}}" required autocomplete="memo" autofocus>

                                @error('memo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="perihal" class="col-md-4 col-form-label text-md-right">{{ __('Perihal') }}</label>

                            <div class="col-md-6">
                                <input id="perihal" type="text" class="form-control @error('Perihal') is-invalid @enderror" name="perihal" value="{{$anggaran[0]->perihal}}" required autocomplete="perihal" autofocus>

                                @error('perihal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="progress" class="col-md-4 col-form-label text-md-right">{{ __('Progress') }}</label>

                            <div class="col-md-6">
                                <input id="progress" type="text" class="form-control @error('progress') is-invalid @enderror" name="progress" value="{{$anggaran[0]->progress}}" required autocomplete="progress" autofocus>

                                @error('progress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jumlah" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah') }}</label>

                            <div class="col-md-6">
                                <input id="jumlah" type="text" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{$anggaran[0]->jumlah}}" required autocomplete="jumlah" autofocus>

                                @error('jumlah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="coa" class="col-md-4 col-form-label text-md-right">{{ __('COA') }}</label>

                            <div class="col-md-6">
                                <input id="coa" type="text" class="form-control @error('coa') is-invalid @enderror" name="coa" value="{{$anggaran[0]->coa}}" required autocomplete="coa" autofocus>

                                @error('coa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
