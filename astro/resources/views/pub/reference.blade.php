@extends('main')

@section('title', '- Add Reference pub')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Add a Reference to Publication {{ $pub->id }}</h1>
            <hr>

            <p class = "lead">{{ $pub->doi }}</p>

            <p><b>Date of Publication:</b> {{ $pub->date_of_publication }}</p>

            </p>
            {!! Form::open(['route' => 'pub.reference', 'files' => true, 'method' => 'POST']) !!}

                {{ Form::hidden("referrer_id", $pub->id) }}

                {{ Form::label('doi', 'Digital Object Identifier') }}
                {!! Form::text('doi', null, ['class'=>'form-control', 'placeholder'=>'Digital Object Identifier']) !!}

                {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create Reference', ['class' => 'btn btn-secondary']) !!}

            {!!  Form::close() !!}
        </div>
    </div>
@stop