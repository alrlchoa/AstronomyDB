@extends('main')

@section('title', '- Add Author to pub')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Publication {{ $pub->id }}</h1>
            <hr>
            <table>
                <thead>
                <th>First Name</th>
                <th>Last Name</th>
                </thead>

                <tbody>

                @foreach ($astronomers as $astronomer)
                    <tr>
                        <td>{{$astronomer->first_name}}</td>
                        <td>{{$astronomer->last_name}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>

            {{ Form::label('author', 'Author:', ['class' => 'font-weight-bold']) }}
            {{ Form::text('firstname', $astronomer->first_name, ['class'=> 'form-control', 'placeholder' =>'Name']) }}
            {{ Form::text('lastname', $astronomer->last_name, ['class'=> 'form-control', 'placeholder' =>'Name']) }}
            <div/>

            <div/>

@stop