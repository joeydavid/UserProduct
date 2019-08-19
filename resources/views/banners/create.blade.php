@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> {{__('Enter Banner Title and Description')}} <a href="{{ url('banners') }}" class="float-right"> Back </a>
                    <div class="card-body">
                        <form method="POST" action="{{ url('banners') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="bannertitle" class="col-md-12 col-form-label text-md-left">{{ __('Banner Title') }}</label>
                                    <div class="col-md-12">
                                        <input id="bannertitle" type="text" class="form-control @error('bannertitle') is-invalid @enderror" name="bannertitle" value="{{ old('bannertitle') }}" required autocomplete="bannertitle" autofocus>
                                        @error('bannertitle')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="bannerdescription" class="col-md-12 col-form-label text-md-left">{{ __('Banner Description') }}</label>
                                    <div class="col-md-12">
                                        <input id="bannerdescription" type="text" class="form-control @error('bannerdescription') is-invalid @enderror" name="bannerdescription" value="{{ old('bannerdescription') }}" required autocomplete="bannerdescription" autofocus>
                                        @error('bannerdescription')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                            </div>
                            <div class="form-group row mb-0">
                            <div class="col-md-12">
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
</div>
@endsection