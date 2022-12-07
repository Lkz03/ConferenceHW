@extends('layouts.app')

@section('title', 'guest view conferences')

@section('content')
    @foreach($articles as $article)
        <h1>{{ $article['title'] }}</h1>
        <p>{{ $article['content'] }}</p>
        <button  type="button" onclick="window.location='{{ route('conference.show', ['conference' => $article->id]) }}'">View</button>
        <br>
    @endforeach
@endsection
