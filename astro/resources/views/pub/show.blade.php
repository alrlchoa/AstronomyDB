@extends('main')

@section('title', '- View pub')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Publication {{ $pub->id }}</h1>
            <hr>

            <p><b>Date of publication:</b> {{ $pub->date_of_publication }}</p>
            <p><b>Digital Object Identifier:</b> {{ $pub->doi}}</p>

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

            <div class="col-md-4">
                @guest
                @else
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12"style="margin-top: 10px;">
                                {!! Form::open(['route' => ['pub.author',$pub->id], 'method'=> 'GET']) !!}
                                {!! Form::submit('Add Author', ['class' =>'btn btn-primary btn-block']) !!}
                                {!! Form::close() !!}
                            </div>
                            <div class="col-md-12"style="margin-top: 10px;">
                                {!! Form::open(['route' => ['pub.reference',$pub->id], 'method'=> 'GET']) !!}
                                {!! Form::submit('Add Reference', ['class' =>'btn btn-primary btn-block']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"style="margin-top: 10px;">
                                {!! Form::open(['route' => ['pub.relation',$pub->id], 'method'=> 'GET']) !!}
                                {!! Form::submit('Add Relation', ['class' =>'btn btn-secondary btn-block']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>

                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-12">
                                {!! Form::open(['route' => ['pub.destroy',$pub->id], 'method'=> 'DELETE']) !!}
                                {!! Form::submit('Delete', ['class' =>'btn btn-danger btn-block']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                @endguest
            </div>


        <div/>
    <div/>

@endsection