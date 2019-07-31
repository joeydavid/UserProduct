@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                            <th scope="col">Delete</th>
                            <th scope="col">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $value)
                                <tr>
                                    <td>
                                        {{$value->name}}
                                    </td>
                                    <td>
                                        {{$value->price}}
                                    </td>
                                    <td>
                                        {{$value->barcode}}
                                    </td>
                                    <td>
                                        {{$value->description}}
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
</div>
@endsection
