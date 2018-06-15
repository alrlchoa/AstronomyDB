@extends('main')

@section('title', '- Edit cb')

@section('content')
    <div class="row">
        <div class="col-md-8">
            {!! Form::model($cb, ['route' => ['cb.update',$cb->id], 'method'=> 'PUT']) !!}
            <h1>Edit Celestial Body {{ Form::label('id', $cb->id) }}</h1>
            {{ Form::hidden('id', $cb->id) }}
            <hr>
            {{ Form::label('name', 'Name:', ['class' => 'font-weight-bold']) }}
            {{ Form::text('name', $cb->name, ['class'=> 'form-control', 'placeholder' =>'Name']) }}
            <br />
            {{ Form::label('right_ascension', 'Right Ascension:', ['class' => 'font-weight-bold']) }}
            {{ Form::number('right_ascension') }}</p>
            {{ Form::label('declination', 'Declination:', ['class' => 'font-weight-bold']) }}
            {{ Form::number('declination') }}</p>
            {{ Form::checkbox('verified',1,0,['class'=>'form-check-input']) }}
            {{ Form::label('verified', 'Verified?') }}
            <hr>

            @if (!empty($comet))
                {{Form::hidden('cbtype',1)}}
                {!! Form::label('comet_speed', 'Speed: ') !!}
                {!! Form::number('comet_speed',$comet->speed,['class'=> 'form-control', 'placeholder' =>'Speed']) !!}

            @elseif (!empty($galaxy))
                {{Form::hidden('cbtype',2)}}
                {!! Form::label('galaxy_brightness', 'Brightness: ') !!}
                {!! Form::number('galaxy_brightness',$galaxy->brightness,['class'=> 'form-control', 'placeholder' =>'Brightness']) !!}

                {!! Form::label('galaxy_redshift', 'Redshift: ') !!}
                {!! Form::number('galaxy_redshift',$galaxy->redshift,['class'=> 'form-control', 'placeholder' =>'Red Shift']) !!}

                {!! Form::label('galaxy_type', 'Type: ') !!}
                {!! Form::select('galaxy_type', json_decode('{"spiral":"Spiral","elliptical":"Elliptical","irregular":"Irregular"}', true), $galaxy->type, ['class' => 'form-control']) !!}

            @elseif (!empty($moon))
                {{Form::hidden('cbtype',3)}}
                {!! Form::label('moon_plid', 'Planet Id: ') !!}
                {!! Form::input('number','moon_plid',$moon->planet_id,['class'=> 'form-control', 'placeholder' =>'Planet ID']) !!}

                {!! Form::label('moon_period', 'Orbital Period: ') !!}
                {!! Form::input('number','moon_period',$moon->orbital_period,['class'=> 'form-control', 'placeholder' =>'Orbital Period']) !!}

                {!! Form::label('moon_radius', 'Moon Radius: ') !!}
                {!! Form::input('number','moon_radius',$moon->radius,['class'=> 'form-control', 'placeholder' =>'Radius']) !!}

            @elseif (!empty($planet))
                {{Form::hidden('cbtype',4)}}
                {!! Form::label('planet_period', 'Orbital Period: ') !!}
                {!! Form::number('planet_period',$planet->orbital_period,['class'=> 'form-control', 'placeholder' =>'Orbital Period']) !!}

                {!! Form::label('planet_type', 'Planet Type: ') !!}
                {!! Form::select('planet_type', json_decode('{"gas_giant":"Gas Giant","earth_like":"Earth-Like","super_earth":"Super Earth"}', true), $planet->planet_type, ['class' => 'form-control']) !!}

            @elseif (!empty($star))
                {{Form::hidden('cbtype',5)}}
                {!! Form::label('star_spectral', 'Spectral Type ID: ') !!}
                {!! Form::number('star_spectral',$spectral->id,['class'=> 'form-control', 'placeholder' =>'Spectral ID']) !!}
            
            @else
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
                <br />
            @endif
        </div>
        <div class="col-md-4">
            <div class="well">
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('cb.show', 'Cancel', array($cb->id), array('class' =>'btn btn-danger btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::submit('Save Changes', array('class' =>'btn btn-success btn-block')) !!}                    
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
