@extends('layouts.app')

@section('content')
    @foreach($conferences as $conference)
        <h1>{{ $conference['title'] }}</h1>
        <p>{{ $conference['content'] }}</p>
    @endforeach
@endsection
