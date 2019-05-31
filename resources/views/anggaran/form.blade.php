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
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Pengajuan') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('Nama Pengajuan') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>

                            <div class="col-md-6">
                                <input id="amount" type="text" class="form-control @error('Amount') is-invalid @enderror" name="amount" value="{{ old('name') }}" required autocomplete="amount" autofocus>

                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ditujukan') }}</label>

                            <div class="col-md-6">

                                <select id="ditujukan" type="text" class="form-control @error('Ditujukan') is-invalid @enderror" name="ditujukan" value="{{ old('name') }}" required autocomplete="ditujukan" autofocus>
                                  <option value="volvo">SLA</option>
                                  <option value="saab">Unit Kerja Lain</option>
                                  <option value="mercedes">Unit Kerja Lain</option>
                                  <option value="audi">Unit Kerja Lain</option>
                                  </select>
                                @error('ditujukan')
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
