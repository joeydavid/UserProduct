@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> INFORMATION <a href="{{ url('services/create') }}" class="float-right">Create New</a>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"> Icons </th>
                                    <th scope="col"> Title </th>
                                    <th scope="col"> Text </th>
                                    <th scope="col"> Edit </th>
                                    <th scope="col"> Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $value)
                                    <tr>
                                        <td> {{ $value->icons }} </td>
                                        <td> {{ $value->title }} </td>
                                        <td> {{ $value->text }} </td>
                                        <td>
                                            <form action="{{ route('services.destroy', $value->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <input type="hidden" value="{{$value->id}}">
                                            <input type="submit" value="Delete">
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('services.edit', $value->id)}}" method="patch">
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