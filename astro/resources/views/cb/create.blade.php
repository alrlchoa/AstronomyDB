@extends('main')

@section('title','- Create Celestial Body')

@section('content')
        <div class="row">
            <div class="col-md-12">
            <h1>Create a Celestial Body</h1>
            <hr>
            {!! Form::open(['route' => 'cb.store', 'files' => true]) !!}

                {{ Form::hidden("astronomer_username", Auth::user()->username) }}

                {{ Form::label('right_ascension', 'Right Ascension') }}
                {!! Form::number('right_ascension',null,['class'=> 'form-control', 'placeholder' =>'Right Ascension', 'step'=>0.01]) !!}  

                {{ Form::label('declination', 'Declination') }}
                {!! Form::number('declination',null,['class'=> 'form-control', 'placeholder' =>'Declination', 'step'=>0.01]) !!} 

                {{ Form::label('name', 'Name') }}
                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Name']) !!}
                <br />
                {!! Form::checkbox('verified',1,0,['class'=>'form-check-input']) !!}
                {{ Form::label('verified', 'Verified?') }}
                <hr>
                {!! Form::label('cbtype', 'Type of Celestial Body:', ['class' => 'col-md-4 control-label-lg']) !!}
                    <div class="col-md-6">
                        <div class="checkbox">
                            <label>{!! Form::radio('cbtype', '0', true) !!} Not Specified</label>
                        </div>
                        <div class="checkbox">
                            <label>{!! Form::radio('cbtype', '1') !!} Comet</label>
                        </div>
                        <div class="checkbox">
                            <label>{!! Form::radio('cbtype', '2') !!} Galaxy</label>
                        </div>
                        <div class="checkbox">
                            <label>{!! Form::radio('cbtype', '3') !!} Moon</label>
                        </div>
                        <div class="checkbox">
                            <label>{!! Form::radio('cbtype', '4') !!} Planet</label>
                        </div>
                        <div class="checkbox">
                            <label>{!! Form::radio('cbtype', '5') !!} Star</label>
                        </div>
                    </div>

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

                <hr>
                <h5>Instrument Used</h5>
                <div class="col-md-11">
                    {{ Form::label('date', 'Date of Discovery') }}
                    {!! Form::date('date', \Carbon\Carbon::now()->format('D/M/Y'), ['class' => 'form-control', 'required' => true]) !!}

                    {{ Form::label('location', 'Location') }}
                    {!! Form::text('location',null,['class'=>'form-control','placeholder'=>'Location']) !!}

                    {{ Form::label('mid', 'Instrument Model ID') }}
                    {!! Form::number('mid',null,['class'=> 'form-control', 'placeholder' =>'Instrument Model ID']) !!}

                    {{ Form::label('type', 'Type') }}
                    {!! Form::text('type',null,['class'=>'form-control','placeholder'=>'Type']) !!}
                </div>
                <hr>

                {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-secondary']) !!}

            {!!  Form::close() !!}
            <br />
            </div>
        </div>
@endsection