@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Log-in Details</div>

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
                            <th scope="col">Role</th>
                            <th scope="col">Type</th>
                            <th scope="col">Email</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                @foreach($users as $value)
                                    <tr>
                                        <td>
                                            {{$value->name}}
                                        </td>
                                        <td>
                                            {{$value->role}}
                                        </td>
                                        <td>
                                            {{$value->type}}
                                        </td>
                                        <td>
                                            {{ $value->email }}
                                        </td>
                                        <td>
                                            <form action="{{ route('users.destroy', $value->id)}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <input type="hidden" value="{{$value->id}}">
                                                <input type="submit" value="Delete">
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('users.edit', $value->id)}}" method="patch">
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
    {{ $users->links() }}
</div>
@endsection
