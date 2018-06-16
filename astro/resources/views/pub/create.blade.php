@extends('main')

@section('title','- Create Publication')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Create a Publication</h1>
            <hr>
            {!! Form::open(['route' => 'cb.store', 'files' => true]) !!}

            {{ Form::label('right_ascension', 'Right Ascension') }}
            {!! Form::number('right_ascension',null,['class'=> 'form-control', 'placeholder' =>'Right Ascension', 'step'=>0.01]) !!}

            {{ Form::label('declination', 'Declination') }}
            {!! Form::number('declination',null,['class'=> 'form-control', 'placeholder' =>'Declination', 'step'=>0.01]) !!}

            {{ Form::label('name', 'Name') }}
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Name']) !!}

            <br />
            
            {{ Form::label('year', 'Year Discovered') }}
            {{ Form::selectYear('year', 0, 2018) }}

            <br />




            {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-secondary']) !!}
        </div>
    </div>

@endsection
