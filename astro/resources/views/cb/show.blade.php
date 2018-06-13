@extends('main')

@section('title', '- View cb')

@section('content')

    <h1>{{ $cb->id }}</h1>

    <p class = "lead">{{ $cb->name }}</p>
    <p> This is the normal format.</p>

@endsection