@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Portfolio Details <a href="{{ url('porfolios/create') }}" class="float-right">Create New</a></div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success fade in" role="alert">
                                {{ session('status') }}
                            </div>
                            <img src="images/{{ Session::get('image') }}">
                        @endif
                        <table class="table table-hover table-bordered table-dark">
                            <thead>
                                <tr>
                                <th width="10%">Image</th>
                                <th width="35%">Title</th>
                                <th width="35%">Text</th>
                                <th width="35%">Delete</th>
                                <th width="35%">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($porfolios as $value)
                                    <tr>
                                        <td>
                                            <img src="images/{{ $value->image }}">
                                        </td>
                                        <td>
                                            {{ $value->title }}
                                        </td>
                                        <td>
                                            {{ $value->text }}
                                        </td>
                                        <td>
                                            <form action="{{ route('porfolios.destroy', $value->id)}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <input type="hidden" value="{{$value->id}}">
                                                <input type="submit" value="Delete">
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('porfolios.edit', $value->id)}}" method="patch">
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
@endsection
