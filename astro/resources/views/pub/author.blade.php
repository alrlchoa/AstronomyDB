@extends('main')

@section('title', '- Add Author to pub')

@section('content')
    <div class="row">
        <div class="col-md-8">
            {!! Form::open(['route' => ['pub.updateAuthor',$pub->id], 'method'=> 'POST']) !!}
            <h1>Publication {{ $pub->id }}</h1>
            <hr>
            <table>
                <thead>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                </thead>

                <tbody>

                @foreach ($astronomers as $astronomer)
                    <tr>
                        <td>{{$astronomer->username}}</td>
                        <td>{{$astronomer->first_name}}</td>
                        <td>{{$astronomer->last_name}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            {{ Form::hidden("pubID", $pub->id) }}
            {{ Form::label('username', 'Username:', ['class' => 'font-weight-bold']) }}
            {{ Form::text(' username', $astronomer->username, ['class'=> 'form-control', 'placeholder' =>'Username']) }}


            <div class="col-md-4">
                <div class="well">
                    <div class="row">
                        <div class="col-sm-12" style="margin-top: 10px;">
                            {!! Html::linkRoute('pub.show', 'Cancel', array($pub->id), array('class' =>'btn btn-danger btn-block')) !!}
                        </div>
                        <div class="col-sm-12" style="margin-top: 10px;">
                            {!! Form::submit('Save Author', array('class' =>'btn btn-success btn-block')) !!}
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>

            <div/>

            <div/>

@stop