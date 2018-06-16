@extends('main')

@section('title','- Search By Threshold')

@section('content')

<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <th>Id</th>
                <th>DOI</th>
                <th>Date Published</th>
            </thead>

        <tbody>

            @foreach ($pubs as $pub)
                <tr>
                    <td>{{$pub->id}}</td>
                    <td>{{$pub->doi}}</td>
                    <td>{{$pub->date_of_publication}}</td>
                    <td><a href="{{route('pub.show',$pub->id)}}" class="btn btn-outline-dark" role="button">View</a></td>
                </tr>
            @endforeach

        </tbody>
        </table>
    </div>
</div>
@endsection