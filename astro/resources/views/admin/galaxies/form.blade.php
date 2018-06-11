<div class="form-group {{ $errors->has('brightness') ? 'has-error' : ''}}">
    {!! Form::label('brightness', 'Brightness', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('brightness', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('brightness', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('redshift') ? 'has-error' : ''}}">
    {!! Form::label('redshift', 'Redshift', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('redshift', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('redshift', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    {!! Form::label('type', 'Type', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('type', json_decode('{"spiral":"Spiral","elliptical":"Elliptical","irregular":"Irregular"}', true), null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
