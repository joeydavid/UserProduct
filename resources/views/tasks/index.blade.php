@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Task Details <a href="{{ url('tasks/create') }}" class="float-right">Create New</a></div>
 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">User</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tasks as $value)
                                <tr>
                                    <td>
                                        {{ $value->title }}
                                    </td>
                                    <td>
                                        {{ $value->description }}
                                    </td>
                                    <td>
                                        {{ $value->user }}
                                    </td>

                                    <td>
                                        <form action="{{ route('tasks.destroy', $value->id)}}" method="post" class="delete_form">
                                            @method('DELETE')
                                            @csrf
                                            <input type="hidden" value="{{$value->id}}">
                                            <input type="submit" value="Delete">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('tasks.edit', $value->id)}}" method="patch">
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
    {{ $tasks->links() }}
</div>
<script>
$(document).ready(function(){
	$('.delete_form').on('submit', function(){
		if(confirm("Are you sure you want to delete it?"))
		{
			return true;
		}
		else
		{
			return false;
		}
	});
});
</script>
@endsection
