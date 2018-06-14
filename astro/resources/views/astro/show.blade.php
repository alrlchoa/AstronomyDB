@extends('main')

@section('title', '- View Astronomer')

@section('content')

    <h1> Astronomer {{ $cb->id }}</h1>
    <hr>

    {{--<p class = "lead">{{ $cb->first_name, $cb->last_name }}</p>--}}

    <p><b>First Name:</b> {{ $cb->first_name }}</p>
    <p><b>Last Name: </b>{{ $cb->last_name }}</p>
    <p><b>Username: </b>{{ $cb->username }}</p>
    {{--@if ($cb->verified == 1)--}}
        {{--<p>Verified</p>--}}
    {{--@else--}}
        {{--<p>Not Verified</p>--}}
    {{--@endif--}}

    <p><b>Researcher Status:</b>
    @if (!empty($reasearcherFellowship))
         Reasearcher at Institution with ID: {{$reasearcherFellowship->institution_id}}
    @else
        Not a Researcher
    @endif
    </p>

    <p><center><b>Celestial Bodies Found</b></center></p>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Right-Ascension</th>
                <th>Declination</th>
                </thead>

                <tbody>

                @foreach ($celestialbody as $CB)
                    <tr>
                        <th>{{$CB->id}}</th>
                        <th>{{$CB->name}}</th>
                        <th>{{$CB->right_ascension}}</th>
                        <th>{{$CB->declination}}</th>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>


    {{--@if (!empty($galaxy))--}}
        {{--<p>Galaxy's Brightness: {{$galaxy->brightness}}</p>--}}
        {{--<p>Galaxy's Redshift: {{$galaxy->redshift}}</p>--}}
        {{--<p>Galaxy's Type: {{$galaxy->type}}</p>--}}
    {{--@endif--}}

    {{--@if (!empty($moon))--}}
        {{--<p>Moon's Orbital Period: {{$moon->orbital_period}}</p>--}}
        {{--<p>Moon's Radius: {{$moon->radius}}</p>--}}
        {{--<p>Moon's Planet Id: {{$moon->planet_id}}</p>--}}
    {{--@endif--}}

    {{--@if (!empty($planet))--}}
        {{--<p>Planet's Orbital Period: {{$planet->orbital_period}}</p>--}}
        {{--<p>Planet's Type: {{$planet->planet_type}}</p>--}}
    {{--@endif--}}

    {{--@if (!empty($star))--}}
        {{--<p>Star's Spectral Brightness: {{$spectral->spectral_type}}</p>--}}
        {{--<p>Star's Brightness: {{$spectral->brightness}}</p>--}}
    {{--@endif--}}

@endsection