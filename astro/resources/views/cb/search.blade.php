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
					<th>{{$CB->name}}</th>
					<th>{{$CB->right_ascension}}</th>
					<th>{{$CB->declination}}</th>
				</tr>
				@endforeach

			</tbody>
		</table>
	</div>
</div>
@endsection