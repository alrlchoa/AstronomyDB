@extends('main')

@section('title', '- Add Reference pub')

@section('content')
    <div class="row">
        <div class="col-md-8">
            {!! Form::open(['route' => 'pub.reference', 'files' => true, 'method' => 'POST']) !!}
            <h1>Add a Reference to Publication {{ $pub->id }}</h1>
            <hr>

            <p class = "lead">{{ $pub->doi }}</p>

            <p><b>Date of Publication:</b> {{ $pub->date_of_publication }}</p>

            @foreach ($pubs as $publication)
                <tr>
                    <td>{{$publication->doi}}</td>
                    <td>{{$publication->date_of_publication}}</td>
                </tr>
                @endforeach

            </p>


                {{ Form::hidden("referrer_id", $pub->id) }}

                {{ Form::label('doi', 'Digital Object Identifier') }}
                {!! Form::text('doi', null, ['class'=>'form-control', 'placeholder'=>'Digital Object Identifier']) !!}

                {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create Reference', ['class' => 'btn btn-primary']) !!}

            {!!  Form::close() !!}
        </div>
    </div>
@stop