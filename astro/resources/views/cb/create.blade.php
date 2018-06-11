@extends('main')

@section('title','- Create Celestial Body')

@section('content')
        <div class="row">
            <div class="col-md-12">
            <h1>Create a Celestial Body</h1>
            <hr>
            {{ Form::open([]) }}
                {{Form::label('Right Ascencion')}}
                {!!Form::input('number','right-ascencion',null,['class'=> 'form-control', 'placeholder' =>'Right Declination', 'step'=>0.01])!!}

                {{Form::label('Declination')}}
                {!!Form::input('number','right-declination',null,['class'=> 'form-control', 'placeholder' =>'Right Declination', 'step'=>0.01])!!}

                {{Form::label('Name')}}
                {{Form::text('right_ascension',null,['class'=>'form-control','placeholder'=>'right-ascension'])}}
                <br />
                {{Form::checkbox('verified',1,false,['class'=>'form-check-input'])}}
                {{Form::label('Verified?')}}
                <br />
                {{Form::submit('Create', ['class'=>'btn btn-secondary'])}}

            {{ Form::close() }}
            </div>
        </div>
@endsection