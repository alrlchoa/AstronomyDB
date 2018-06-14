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

@endsection