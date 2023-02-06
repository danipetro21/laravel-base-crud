@extends('layouts.base')

@section('content')

<h1>UPDATE SAINT</h1>
    <form action="{{ route('saint.store') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $saint -> name }}">
        <br>
        <br>
        <label for="birthPlace">Birth Place</label>
        <input type="text" name="birthPlace" value="{{ $saint -> birdPlace }}">
        <br>
        <br>
        <label for="blessingDate">Blessing Date</label>
        <input type="date" name="blessingDate" value="{{ $saint -> blessingDate }}">
        <br>
        <br>
        <label for="miracleCount">Miracle Count</label>
        <input type="number" name="miracleCount" value="{{ $saint -> miracleCount }}">
        <br>
        <br>
        <input type="submit" value="UPDATE SAINT">
        
        
    </form>
    
@endsection