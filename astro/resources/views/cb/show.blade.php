@extends('main')

@section('title', '- View cb')

@section('content')

    <h1>{{ $cb->title }}</h1>

    <p class = "lead">{{ $cb->body }}</p>

@endsection