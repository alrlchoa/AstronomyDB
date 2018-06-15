@extends('main')

@section('title','- Search Celestial Body')

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

				@foreach ($celestialbody as $CB)
				<tr>
					<th>{{$CB->id}}</th>
					<td>{{$CB->name}}</td>
					<td>{{$CB->right_ascension}}</td>
					<td>{{$CB->declination}}</td>
					<td><a href="{{route('cb.show',$CB->id)}}" class="btn btn-outline-dark" role="button">View</a></td>
				</tr>
				@endforeach

			</tbody>
		</table>
	</div>
</div>
@endsection