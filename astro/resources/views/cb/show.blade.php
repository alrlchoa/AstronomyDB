@extends('main')

@section('title', '- View cb')

@section('content')

    <h1>{{ $cb->id }}</h1>

    <p class = "lead">{{ $cb->name }}</p>
    <p class = "lead">{{ $cbtype }}</p>

    <p>Right Ascension: {{ $cb->right_ascension }}</p>
    <p>Declination: {{ $cb->declination }}</p>
    <p>Verified? {{ $cb->verified }}</p>


@endsection