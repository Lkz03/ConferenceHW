@extends('layouts.app')

@section('title', 'Edit conference')

@section('content')
    <form action="{{ route('conference.update', ['conference' => $conference->id]) }}" method="PUT">
        @csrf
        <div>
            <label for="title-input">Title</label>
            <input id="title-input" type="text" name="title">
        </div>
        <div>
            <label for="content-inpt">Content</label>
            <textarea id="content-inpt" name="content"></textarea>
        </div>
        <br>
        <div>
            <input type="submit" value="UPDATE">
        </div>
    </form>
@endsection
