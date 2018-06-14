{{--@extends('main')--}}

{{--@section('title','- Search By Threshold')--}}

{{--@section('content')--}}

    {{--<div class="row">--}}
        {{--<div class="col-md-12">--}}
            {{--<table class="table">--}}
                {{--<thead>--}}
                {{--<th>Id</th>--}}
                {{--<th>Name</th>--}}
                {{--<th>Right-Ascension</th>--}}
                {{--<th>Declination</th>--}}
                {{--</thead>--}}

                {{--<tbody>--}}

                {{--@if(!is_null($comet))--}}
                {{--@foreach ($comet as $S)--}}
                    {{--<tr>--}}
                        {{--<th>{{$S->id}}</th>--}}
                        {{--<th>{{$S->name}}</th>--}}
                        {{--<th>{{$S->right_ascension}}</th>--}}
                        {{--<th>{{$S->declination}}</th>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}
                {{--@endif--}}
                {{--@if(!is_null($star))--}}
                {{--@foreach ($star as $S)--}}
                    {{--<tr>--}}
                        {{--<th>{{$S->id}}</th>--}}
                        {{--<th>{{$S->name}}</th>--}}
                        {{--<th>{{$S->right_ascension}}</th>--}}
                        {{--<th>{{$S->declination}}</th>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}
                {{--@endif--}}
                {{--@if(!is_null($planet))--}}
                {{--@foreach ($planet as $S)--}}
                    {{--<tr>--}}
                        {{--<th>{{$S->id}}</th>--}}
                        {{--<th>{{$S->name}}</th>--}}
                        {{--<th>{{$S->right_ascension}}</th>--}}
                        {{--<th>{{$S->declination}}</th>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}
                {{--@endif--}}
                {{--@if(!is_null($moon))--}}
                {{--@foreach ($moon as $S)--}}
                    {{--<tr>--}}
                        {{--<th>{{$S->id}}</th>--}}
                        {{--<th>{{$S->name}}</th>--}}
                        {{--<th>{{$S->right_ascension}}</th>--}}
                        {{--<th>{{$S->declination}}</th>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}
                {{--@endif--}}
                {{--@if(!is_null($galaxy))--}}
                {{--@foreach ($galaxy as $S)--}}
                    {{--<tr>--}}
                        {{--<th>{{$S->id}}</th>--}}
                        {{--<th>{{$S->name}}</th>--}}
                        {{--<th>{{$S->right_ascension}}</th>--}}
                        {{--<th>{{$S->declination}}</th>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}
                {{--@endif--}}
                {{--@if(!is_null($none))--}}
                {{--@foreach ($none as $S)--}}
                    {{--<tr>--}}
                        {{--<th>{{$S->id}}</th>--}}
                        {{--<th>{{$S->name}}</th>--}}
                        {{--<th>{{$S->right_ascension}}</th>--}}
                        {{--<th>{{$S->declination}}</th>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}
                {{--@endif--}}

                {{--</tbody>--}}
            {{--</table>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}