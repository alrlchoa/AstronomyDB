<div class="form-group {{ $errors->has('right_ascension') ? 'has-error' : ''}}">
    {!! Form::label('right_ascension', 'Right Ascension', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('right_ascension', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('right_ascension', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('declination') ? 'has-error' : ''}}">
    {!! Form::label('declination', 'Declination', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('declination', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('declination', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('verified') ? 'has-error' : ''}}">
    {!! Form::label('verified', 'Verified', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('verified', '1') !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('verified', '0', true) !!} No</label>
</div>
        {!! $errors->first('verified', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
