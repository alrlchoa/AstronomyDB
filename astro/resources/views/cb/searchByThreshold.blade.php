@extends('main')

@section('title','- Search By Threshold')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Right-Ascension</th>
                <th>Declination</th>
                </thead>

                <tbody>

                @foreach ($star as $G)
                    <tr>
                        <th>{{$G->id}}</th>
                        <th>{{$G->name}}</th>
                        <th>{{$G->right_ascension}}</th>
                        <th>{{$G->declination}}</th>
                    </tr>
                @endforeach

                @foreach ($galaxy as $S)
                    <tr>
                        <th>{{$S->id}}</th>
                        <th>{{$S->name}}</th>
                        <th>{{$S->right_ascension}}</th>
                        <th>{{$S->declination}}</th>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection