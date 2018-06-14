@extends('main')

@section('title', '- View cb')

@section('content')

    <h1>{{ $cb->id }}</h1>

    <p class = "lead">{{ $cb->name }}</p>

    <p>Right Ascension: {{ $cb->right_ascension }}</p>
    <p>Declination: {{ $cb->declination }}</p>
    @if ($cb->verified == 1)
        <p>Verified</p>
    @else
        <p>Not Verified</p>
    @endif

    @if (!is_null($comet))
        <p>Comet Speed: {{$comet->speed}}</p>
    @endif

    @if (!is_null($galaxy))
        <p>Galaxy Brightness: {{$galaxy->brightness}}</p>
        <p>Galaxy Redshift: {{$galaxy->speed}}</p>
        <p>Galaxy Type: {{$galaxy->type}}</p>
    @endif



@endsection