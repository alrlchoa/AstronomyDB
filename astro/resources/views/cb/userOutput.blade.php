@extends('main')

@section('title','- Search By Threshold')

@section('content')

<div class="row">
<div class="col-md-12">
<table class="table">
<thead>
<th>Id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Username</th>
</thead>

<tbody>

@foreach ($astronomer as $A)
<tr>
<th>{{$A->id}}</th>
<th>{{$A->first_name}}</th>
<th>{{$A->last_name}}</th>
<th>{{$A->username}}</th>
</tr>
@endforeach

</tbody>
</table>
</div>
</div>
@endsection