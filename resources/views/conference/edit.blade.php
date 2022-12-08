@extends('layouts.app')

@section('title', 'Edit conference')

@section('content')
    <form action="{{ route('conference.update', ['conference' => $conference->id]) }}" method="post">
        @method('put')
        @csrf
        <div>
            <label for="title-input">Title</label>
            <input id="title-input" type="text" name="title" value="{{ $conference->title }}">
        </div>
        <div>
            <label for="content-inpt">Content</label>
            <textarea id="content-inpt" name="content">{{ $conference->content }}</textarea>
        </div>
        <br>
        <div>
            <input type="submit" value="UPDATE">
        </div>
    </form>
@endsection
