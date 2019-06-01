@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form Anggaran') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal') }}</label>

                            <div class="col-md-6">
                                <input id="tanggal" type="date" class="form-control @error('Tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}" required autocomplete="tanggal" autofocus>

                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Memo') }}</label>

                            <div class="col-md-6">
                                <input id="memo" type="text" class="form-control @error('Nomor Memo') is-invalid @enderror" name="memo" value="{{ old('memo') }}" required autocomplete="memo" autofocus>

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
                                <input id="perihal" type="text" class="form-control @error('Perihal') is-invalid @enderror" name="perihal" value="{{ old('perihal') }}" required autocomplete="perihal" autofocus>

                                @error('perihal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Unit" class="col-md-4 col-form-label text-md-right">{{ __('Unit') }}</label>

                            <div class="col-md-6">

                                <select id="unit" type="text" class="form-control @error('unit') is-invalid @enderror" name="unit" value="{{ old('unit') }}" required autocomplete="unit" autofocus>
                                  <option value="volvo">Unit Kerja Lain</option>
                                  <option value="saab">Unit Kerja Lain</option>
                                  <option value="mercedes">Unit Kerja Lain</option>
                                  <option value="audi">Unit Kerja Lain</option>
                                  </select>
                                @error('unit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('File') }}</label>

                            <div class="col-md-6">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>

                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
