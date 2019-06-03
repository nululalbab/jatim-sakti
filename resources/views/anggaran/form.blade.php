@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form Anggaran') }}</div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('post.form.anggaran') }}" enctype="multipart/form-data">
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
                            <label for="jumlah" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah') }}</label>

                            <div class="col-md-6">
                                <input id="jumlah" type="text" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{ old('jumlah') }}" required autocomplete="jumlah" autofocus>

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
                                <input id="coa" type="text" class="form-control @error('coa') is-invalid @enderror" name="coa" value="{{ old('coa') }}" required autocomplete="coa" autofocus>

                                @error('coa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <input id="user" type="hidden" class="form-control @error('user') is-invalid @enderror" name="user" value="{{Auth::user()->id}}" required autocomplete="user" autofocus>

                        {{-- <div class="form-group row">
                            <label for="Unit" class="col-md-4 col-form-label text-md-right">{{ __('Unit') }}</label>

                            <div class="col-md-6">
                              <select id="unit" type="text" class="form-control @error('unit') is-invalid @enderror" name="unit" value="{{ old('unit') }}" required autocomplete="unit" autofocus>
                              @foreach ($unit as $unit)
                                <option value="{{$unit->id_unit}}">{{$unit->nama_unit}}</option>
                              @endforeach
                                </select>

                                @error('unit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                          <input id="status" type="hidden" class="form-control @error('status') is-invalid @enderror" name="status" value="0" required autocomplete="status" autofocus>

                        <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('File') }}</label>

                            <div class="col-md-6">
                            <div class="custom-file">
                              <div class="form-group">
                                <input type="file" name="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <!-- <label class="custom-file-label" for="inputGroupFile01">Choose file</label> -->
                                <div><small id="helpId" class="text-muted">Upload file gambar</small></div>
                            </div>

                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
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
