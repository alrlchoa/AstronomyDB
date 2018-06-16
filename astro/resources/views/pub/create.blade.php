@extends('main')

@section('title','- Create Publication')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Create a Publication</h1>
            <hr>
            {!! Form::open(['route' => 'pub.store', 'files' => true]) !!}


            <br />

            {{ Form::label('year', 'Year Published') }}
            {{ Form::selectYear('year', 0, 2018) }}

            <br />
            <br />

            {{ Form::label('doi', 'Digital Object Identifier') }}
            {!! Form::text('doi',null,['class'=>'form-control','placeholder'=>'Digital Object Identifier']) !!}

            <br />


            {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-secondary']) !!}
        </div>
    </div>

@endsection
