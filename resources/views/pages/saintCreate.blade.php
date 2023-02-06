@extends('layouts.base')

@section('content')
    <h1>CREATE A NEW SAINT</h1>

    @include('components.errors')

    <form action="{{ route('saint.store') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <br>
        <label for="birthPlace">Birth Place</label>
        <input type="text" name="birthPlace">
        <br>
        <br>
        <label for="blessingDate">Blessing Date</label>
        <input type="date" name="blessingDate">
        <br>
        <br>
        <label for="miracleCount">Miracle Count</label>
        <input type="number" name="miracleCount">
        <br>
        <br>
        <input type="submit" value="CREATE NEW SAINT">


    </form>
@endsection
