@extends('layouts.app')

@section('content')
    @guest
    @else
        <button class="btn" type="button" onclick="window.location='{{ route('conference.create') }}'">Create new conference</button>
    @endguest
    @foreach($conferences as $conference)
        @guest
            <h1>{{ $conference['title'] }}</h1>
            <p>{{ $conference['content'] }}</p>
            <button class="btn" type="button" onclick="window.location='{{ route('conference.show', ['conference' => $conference->id]) }}'">View</button>
        @else
            <h1>{{ $conference['title'] }}</h1>
            <p>{{ $conference['content'] }}</p>
            <button class="btn" type="button" onclick="window.location='{{ route('conference.show', ['conference' => $conference->id]) }}'">View</button>
            <button class="btn" type="button" onclick="window.location='{{ route('conference.edit', ['conference' => $conference->id]) }}'">Edit</button>
            <form action="{{ route('conference.destroy', ['conference' => $conference->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn" type="submit">Delete</button>
            </form>
            <br>
        @endguest
    @endforeach
@endsection
