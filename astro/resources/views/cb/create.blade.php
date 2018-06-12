@extends('main')

@section('title','- Create Celestial Body')

@section('content')
        <div class="row">
            <div class="col-md-12">
            <h1>Create a Celestial Body</h1>
            <hr>
            {!! Form::open(['url' => 'cb', 'files' => true]) !!}

                {!! Form::label('Right Ascension') !!}
                {!! Form::input('number','right_ascension',null,['class'=> 'form-control', 'placeholder' =>'Right Ascension', 'step'=>0.01]) !!}  

                {!! Form::label('Declination') !!}
                {!! Form::input('number','declination',null,['class'=> 'form-control', 'placeholder' =>'Declination', 'step'=>0.01]) !!} 

                {!! Form::label('Name') !!}
                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Name']) !!}
                <br />
                {!! Form::checkbox('verified',1,0,['class'=>'form-check-input']) !!}
                {!! Form::label('Verified?') !!}
                <br />
                {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-secondary']) !!}

            {!!  Form::close() !!}
            </div>
        </div>
@endsection