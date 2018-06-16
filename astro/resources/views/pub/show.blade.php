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
                            <div class="col-md-12">
                                {!! Html::linkRoute('pub.author', 'Add Author', array($pub->id), array('class' =>'btn btn-primary btn-block')) !!}
                            </div>
                            {{--<div class="col-md-6">--}}
                                {{--{!! Html::linkRoute('pub.reference', 'Add Author', array($pub->id), array('class' =>'btn btn-primary btn-block')) !!}--}}
                            {{--</div>--}}
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {!! Html::linkRoute('pub.relation', 'Add Relation', array($pub->id), array('class' =>'btn btn-primary btn-block')) !!}
                            </div>
                        </div>

                        {{--<div class="row" style="margin-top: 10px;">--}}
                            {{--<div class="col-md-12">--}}
                                {{--{!! Html::linkRoute('pub.destroy', 'Delete', array($pub->id), array('class' =>'btn btn-danger btn-block')) !!}--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                @endguest
            </div>


        <div/>
    <div/>

@endsection