@extends('layouts.app')

@section('content')
    @foreach($articles as $article)
        <h1>{{ $article['title'] }}</h1>
        <p>{{ $article['content'] }}</p>
        <button  type="button" onclick="window.location='{{ route('conference.show', ['conference' => $article->id]) }}'">View</button>
        <button  type="button" onclick="window.location='{{ route('conference.edit') }}'">Edit</button>
        <button  type="button" onclick="window.location='{{ route('conference.destroy', ['conference' => $article->id]) }}'">Delete</button>
        <br>
    @endforeach
@endsection
