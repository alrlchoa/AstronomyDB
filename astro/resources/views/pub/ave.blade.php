@extends('main')

@section('title', '- Insight Average')

@section('content')
    @if ($skree == 0)
        <p class="h3">The Institution cited, on average, the least is: {{$name}}</p>
        <p>It was cited {{$count}} times.</p>
    @elseif ($skree == 1)
        <p class="h3">The Institution cited, on average, the most is: {{$name}}</p>
        <p>It was cited {{$count}} times.</p>
    @else
        <p class = "h3">There are no references!</p>
    @endif

@endsection