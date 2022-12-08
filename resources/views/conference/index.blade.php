@extends('layouts.app')

@section('content')
    @foreach($conferences as $conference)
        <h1>{{ $conference['title'] }}</h1>
        <p>{{ $conference['content'] }}</p>
        <button  type="button" onclick="window.location='{{ route('conference.show', ['conference' => $conference->id]) }}'">View</button>
        <button  type="button" onclick="window.location='{{ route('conference.edit', ['conference' => $conference->id]) }}'">Edit</button>
        <form action="{{ route('conference.destroy', ['conference' => $conference->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button  type="submit">Delete</button>
        </form>
        <br>
    @endforeach
@endsection
