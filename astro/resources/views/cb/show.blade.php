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

    @if (!empty($comet))
        <p>Comet's Speed: {{$comet->speed}}</p>
    @endif

    @if (!empty($galaxy))
        <p>Galaxy's Brightness: {{$galaxy->brightness}}</p>
        <p>Galaxy's Redshift: {{$galaxy->redshift}}</p>
        <p>Galaxy's Type: {{$galaxy->type}}</p>
    @endif

    @if (!empty($moon))
        <p>Moon's Orbital Period: {{$moon->orbital_period}}</p>
        <p>Moon's Radius: {{$moon->radius}}</p>
        <p>Moon's Planet Id: {{$moon->planet_id}}</p>
    @endif

    @if (!empty($planet))
        <p>Planet's Orbital Period: {{$planet->orbital_period}}</p>
        <p>Planet's Type: {{$planet->planet_type}}</p>
    @endif

    @if (!empty($star))
        <p>Star's Spectral Brightness: {{$spectral->spectral_type}}</p>
        <p>Star's Brightness: {{$spectral->brightness}}</p>
    @endif

@endsection