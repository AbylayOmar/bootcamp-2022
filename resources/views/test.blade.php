@extends('app')

@section('anothersection')

    <h1> {{ $count }} </h1>

    <select>
        @foreach($users as $user)
            <option> {{ $user }} </option>
        @endforeach
    </select>

    <select>
        @for($i = 0; $i < 10; $i++) 
            @if($i % 2 == 0)
                <option> {{ $i }} RED </option>
            @else
                <option> {{ $i }} </option>
            @endif>
        @endfor
    </select>
@endsection