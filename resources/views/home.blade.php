@extends('layouts.main')

@section('content')
<div class="container">
    @foreach ($movies as $movie)
        <article>
            <div>Title: {{ $movie->title}}</div>
            <div>Original-title: {{ $movie->original_title}}</div>
            <div>Nationality: {{ $movie->nationality}}</div>
            <div>Date: {{ $movie->date}}</div>
            <div>Vote: {{ $movie->vote}}</div>
        </article>
    @endforeach
</div>
@endsection