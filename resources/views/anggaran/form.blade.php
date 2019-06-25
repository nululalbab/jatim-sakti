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
                                <input id="tanggal" type="date" class="form-control @error('Tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}" required autocomplete="tanggal" placeholder="YYYY-MM-DD" autofocus>

                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Dokumen') }}</label>

                            <div class="col-md-6">
                                <input id="dokumen" type="text" class="form-control @error('Nomor dokumen') is-invalid @enderror" name="dokumen" value="{{ old('dokumen') }}" required autocomplete="dokumen" autofocus>

                                @error('dokumen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nomor invoice') }}</label>

                            <div class="col-md-6">
                                <input id="invoice" type="text" class="form-control @error('Nomor invoice') is-invalid @enderror" name="invoice" value="{{ old('invoice') }}" required autocomplete="invoice" autofocus>

                                @error('invoice')
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
                                <input id="coa" type="text" class="coa form-control @error('coa') is-invalid @enderror" name="coa" value="{{ old('coa') }}" required autocomplete="coa" autofocus>

                                @error('coa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <input id="user" type="hidden" class="form-control @error('user') is-invalid @enderror" name="user" value="{{Auth::user()->id}}" required autocomplete="user" autofocus>



                          <input id="status" type="hidden" class="form-control @error('status') is-invalid @enderror" name="status" value="0" required autocomplete="status" autofocus>
                        


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Kirim Anggaran') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
       $( "#coa" ).autocomplete({
    
           source: function(request, response) {
               $.ajax({
               url: "{{url('autocomplete')}}",
               data: {
                       term : request.term
                },
               dataType: "json",
               success: function(data){
                  var resp = $.map(data,function(obj){
                       //console.log(obj.city_name);
                       return obj.coa;
                  }); 
    
                  response(resp);
               }
           });
       },
       minLength: 1
    });
   });
    
   </script>   
   @endsection
