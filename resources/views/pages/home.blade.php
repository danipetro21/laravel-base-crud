@extends('layouts.base')

@section('content')
    <h1>SANTI:</h1>

    <h3><a href="{{ route('saint.create') }}">CREA UN NUOVO SANTO</a></h3>
    <ul>
        @foreach ($saints as $saint)
        
            <li>

                <a href="{{ route('saint.show', $saint) }}">

                    {{ $saint -> name }} - {{ $saint -> miracleCount }}
                    
                </a>

                <a href="{{ route('saint.delete', $saint) }}"> - X</a>

            </li>

        @endforeach
    </ul>
@endsection
