@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> BANNER <a href="{{ url('banners/create') }}" class="float-right">Create New</a>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"> Banner Title </th>
                                    <th scope="col"> Banner Description </th>
                                    <th scope="col"> Edit </th>
                                    <th scope="col"> Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($banners as $value)
                                    <tr>
                                        <td> {{ $value->bannertitle }} </td>
                                        <td> {{ $value->bannerdescription }} </td>
                                        <td>
                                            <form action="{{ route('banners.destroy', $value->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <input type="hidden" value="{{$value->id}}">
                                            <input type="submit" value="Delete">
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('banners.edit', $value->id)}}" method="patch">
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
</div>
@endsection