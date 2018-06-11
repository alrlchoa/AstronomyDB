<div class="form-group {{ $errors->has('planet_id') ? 'has-error' : ''}}">
    {!! Form::label('planet_id', 'Planet Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('planet_id', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('planet_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('orbital_period') ? 'has-error' : ''}}">
    {!! Form::label('orbital_period', 'Orbital Period', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('orbital_period', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('orbital_period', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('radius') ? 'has-error' : ''}}">
    {!! Form::label('radius', 'Radius', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('radius', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('radius', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
