<div class="form-group {{ $errors->has('speed') ? 'has-error' : ''}}">
    {!! Form::label('speed', 'Speed', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('speed', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('speed', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
