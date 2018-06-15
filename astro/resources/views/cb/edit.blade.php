@extends('main')

@section('title', '- Edit cb')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Celestial Body</h1>
            <hr>
            {!! Form::open(['route' => 'cb.store', 'files' => true]) !!}

            {{ Form::label('name', 'Name') }}
            {!! Form::text('name',$cb->name,['class'=>'form-control','placeholder'=>'Name']) !!}
            <br />

            <hr>


            <div class="col-md-11 offset-md-1">
                <p class="lead"> For Comets: </p>
                {!! Form::label('comet_speed', 'Speed: ') !!}
                {!! Form::number('comet_speed',null,['class'=> 'form-control', 'placeholder' =>'Speed']) !!}
            </div>
            <div class="col-md-11 offset-md-1">
                <p class="lead"> For Galaxies: </p>
                {!! Form::label('galaxy_brightness', 'Brightness: ') !!}
                {!! Form::number('galaxy_brightness',null,['class'=> 'form-control', 'placeholder' =>'Brightness']) !!}

                {!! Form::label('galaxy_redshift', 'Redshift: ') !!}
                {!! Form::number('galaxy_redshift',null,['class'=> 'form-control', 'placeholder' =>'Red Shift']) !!}

                {!! Form::label('galaxy_type', 'Type: ') !!}
                {!! Form::select('galaxy_type', json_decode('{"spiral":"Spiral","elliptical":"Elliptical","irregular":"Irregular"}', true), null, ['class' => 'form-control']) !!}
            </div>
            <div class="col-md-11 offset-md-1">
                <p class="lead"> For Moons: </p>
                {!! Form::label('moon_plid', 'Planet Id: ') !!}
                {!! Form::input('number','moon_plid',null,['class'=> 'form-control', 'placeholder' =>'Planet ID']) !!}

                {!! Form::label('moon_period', 'Orbital Period: ') !!}
                {!! Form::input('number','moon_period',null,['class'=> 'form-control', 'placeholder' =>'Orbital Period']) !!}

                {!! Form::label('moon_radius', 'Moon Radius: ') !!}
                {!! Form::input('number','moon_radius',null,['class'=> 'form-control', 'placeholder' =>'Radius']) !!}
            </div>
            <div class="col-md-11 offset-md-1">
                <p class="lead"> For Planets: </p>
                {!! Form::label('planet_period', 'Orbital Period: ') !!}
                {!! Form::number('planet_period',null,['class'=> 'form-control', 'placeholder' =>'Orbital Period']) !!}

                {!! Form::label('planet_type', 'Planet Type: ') !!}
                {!! Form::select('planet_type', json_decode('{"gas_giant":"Gas Giant","earth_like":"Earth-Like","super_earth":"Super Earth"}', true), null, ['class' => 'form-control']) !!}
            </div>
            <div class="col-md-11 offset-md-1">
                <p class="lead"> For Stars: </p>
                {!! Form::label('star_spectral', 'Spectral Type: ') !!}
                {!! Form::number('star_spectral',null,['class'=> 'form-control', 'placeholder' =>'Spectral ID']) !!}
            </div>
            {!!  Form::close() !!}
            <br />
        </div>
    </div>
@stop
