@extends('main')

@section('title', '- Insight Papers')

@section('content')
    @if ($skree == 0)
        <p class="h3">The least cited paper has doi: {{$doi}}</p>
        <p>It was cited {{$count}} times.</p>
    @elseif ($skree == 1)
        <p class="h3">The most  cited paper has doi: {{$doi}}</p>
        <p>It was cited {{$count}} times.</p>
    @else
        <p class = "h3">There are no references!</p>
    @endif

@endsection