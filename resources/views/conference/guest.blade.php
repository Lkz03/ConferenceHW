@extends('layouts.app')

@section('title', 'guest view conferences')

@section('content')
    @foreach($conferences as $conference)
        <h1>{{ $conference['title'] }}</h1>
        <p>{{ $conference['content'] }}</p>
        <button  type="button" onclick="window.location='{{ route('conference.show', ['conference' => $conference->id]) }}'">View</button>
        <br>
    @endforeach
@endsection
