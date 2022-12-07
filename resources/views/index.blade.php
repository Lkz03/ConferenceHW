@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <form action="{{ route('loginUser') }}" method="GET">
        @csrf
        <div>
            <label for="title-input">Username</label>
            <input id="title-input" type="text" name="username">
        </div>
        <div>
            <label for="content-inpt">Password</label>
            <input id="content-inpt" type="password" name="password">
        </div>
        <br>
        <div>
            <input type="submit" value="LOG IN">
        </div>
    </form>
@endsection
