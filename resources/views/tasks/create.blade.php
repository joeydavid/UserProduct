@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Task') }} <a href="{{ url('tasks') }}" class="float-right">Back</a> </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('tasks') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('User') }}</label>

                            <div class="col-md-6">
                                <select class="form-control @error('user') is-invalid @enderror" name="user" required>
                                        <option selected disabled>Select User--</option>
                                    @foreach($users as $value)
                                        <option value="{{ $value->email }}">{{ $value->email }}</option>
                                    @endforeach
                                </select>
                                @error('user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form> <!--  end of form- lahat ng sinasubmit sa database -->
                </div> <!--  end of card-body -->
            </div> <!--  end of card -->
        </div> <!--  end of col-md -->
    </div> <!--  end of row -->
 </div> <!--end of container -->

            <br>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Product Details <a href="{{ url('products/create') }}" class="float-right">Create New</a></div>
            
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Barcode</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Delete</th>
                                        <th scope="col">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $value)
                                            <tr>
                                                <td>
                                                    {{ $value->name }}
                                                </td>
                                                <td>
                                                    {{ $value->price }}
                                                </td>
                                                <td>
                                                    {{ $value->barcode }}
                                                </td>
                                                <td>
                                                    {{ $value->description }}
                                                </td>
                                                <td>
                                                    {{ $value->user }}
                                                </td>
                                                <td>
                                                    <form action="{{ route('products.destroy', $value->id)}}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <input type="hidden" value="{{$value->id}}">
                                                        <input type="submit" value="Delete">
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="{{ route('products.edit', $value->id)}}" method="patch">
                                                        @csrf
                                                        <input type="hidden" value="{{$value->id}}">
                                                        <input type="submit" value="Edit">
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{ $products->links() }}
            </div>
@endsection
