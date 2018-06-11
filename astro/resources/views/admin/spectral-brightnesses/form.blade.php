<div class="form-group {{ $errors->has('spectral_type') ? 'has-error' : ''}}">
    {!! Form::label('spectral_type', 'Spectral Type', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('spectral_type', json_decode('{"o":"O","b":"B","a":"A","f":"F","g":"G","k":"K","m":"M"}', true), null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('spectral_type', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('brightness') ? 'has-error' : ''}}">
    {!! Form::label('brightness', 'Brightness', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('brightness', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('brightness', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
