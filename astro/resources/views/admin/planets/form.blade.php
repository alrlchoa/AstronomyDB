<div class="form-group {{ $errors->has('orbital_period') ? 'has-error' : ''}}">
    {!! Form::label('orbital_period', 'Orbital Period', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('orbital_period', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('orbital_period', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('planet_type') ? 'has-error' : ''}}">
    {!! Form::label('planet_type', 'Planet Type', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('planet_type', json_decode('{"gas_giant":"Gas Giant","earth_like":"Earth-Like","super_earth":"Super Earth"}', true), null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('planet_type', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
