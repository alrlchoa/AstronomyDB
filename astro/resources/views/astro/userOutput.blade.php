@extends('main')

@section('title','- Search By Threshold')

@section('content')

<div class="row">
    <p  class="h5">We now have <strong>{{$count}}</strong> results.</p>
    <div class="col-md-12">
        <table class="table">
            <thead>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>Institution</th>
            </thead>

        <tbody>

            @foreach ($astronomer as $A)
                <tr>
                    <td>{{$A->id}}</td>
                    <td>{{$A->first_name}}</td>
                    <td>{{$A->last_name}}</td>
                    <td>{{$A->username}}</td>
                    @if(is_null($A->name))
                        <td>No Institution</td>
                    @else
                        <td>{{$A->name}}</td>
                    @endif
                    <td><a href="{{route('astro.show',$A->id)}}" class="btn btn-outline-dark" role="button">View</a></td>
                </tr>
            @endforeach

        </tbody>
        </table>
    </div>
</div>
@endsection