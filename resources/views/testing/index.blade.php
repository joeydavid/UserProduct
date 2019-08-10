@extends('layouts.app')

@section('content')

<div> {{ $test }} </div>

<div> {{ $test2 }} </div>

<div> {{ $test3 }} </div>

<div> {{ $test4 }} </div>

<div>
    @for($i = 0; $i < 10; $i++)
        {{ $i }} <br>
    @endfor
</div>

<div>
@switch ($switch)
    @case('red')
            "Your favorite color is red!"
        @break
    @case('blue')
        echo "Your favorite color is blue!"
        @break
    @case('green')
            "Your favorite color is green!"
        @break
    @default
            "Your favorite color is neither red, blue, nor green!"
@endswitch
</div>

@endsection
