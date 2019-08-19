@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> {{__('Enter Information')}} <a href="{{ url('services') }}" class="float-right"> Back </a>
                    <div class="card-body">
                        <form method="POST" action="{{ url('services') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="icons" class="col-md-12 col-form-label text-md-left">{{ __('Icons') }}</label>
                                    <div class="col-md-12">
                                        <input id="icons" type="text" class="form-control @error('icons') is-invalid @enderror" name="icons" value="{{ old('icons') }}" required autocomplete="icons" autofocus>
                                        @error('icons')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-md-12 col-form-label text-md-left">{{ __('Title') }}</label>
                                    <div class="col-md-12">
                                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="text" class="col-md-12 col-form-label text-md-left">{{ __('Text') }}</label>
                                    <div class="col-md-12">
                                        <input id="text" type="text" class="form-control @error('text') is-invalid @enderror" name="text" value="{{ old('text') }}" required autocomplete="text" autofocus>
                                        @error('text')
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