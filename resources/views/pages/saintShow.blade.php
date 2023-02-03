@extends('layouts.base')

@section('content')

<h1>
    SAINT : {{$saint->name}}
</h1>

<h3>MIRACLE COUNT: {{$saint->miracleCount}}</h3>
<h3>BIRTH PLACE: {{$saint->birdPlace}}</h3>
<h3>BLESSING DATE: {{$saint->blessingDate}}</h3>
    
@endsection