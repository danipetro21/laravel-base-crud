@extends('layouts.base')

@section('content')
    <h1>SANTI:</h1>

    <h3><a href="{{ route('saint.create') }}">CREA UN NUOVO SANTO</a></h3>
    <ul>
        @foreach ($saints as $saint)
        
            <li>

                <a href="{{ route('saint.show', ['id' => $saint -> id]) }}">

                    {{ $saint -> name }} - {{ $saint -> miracleCount }}
                    
                </a>

                <a href="{{ route('saint.delete', ['id' => $saint -> id]) }}"> - X</a>

            </li>

        @endforeach
    </ul>
@endsection
