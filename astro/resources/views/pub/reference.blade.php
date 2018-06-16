@extends('main')

@section('title', '- Add Reference pub')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Add Reference {{ $pub->id }}</h1>
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

        </div>
        <div class="col-md-4">
            <div class="well">
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('pub.show', 'Cancel', array($pub->id), array('class' =>'btn btn-danger btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Html::linkRoute('pub.update', 'Save Changes', array($cb->id), array('class' =>'btn btn-success btn-block')) !!}                    </div>
                </div>
            </div>
        </div>
    </div>
@stop