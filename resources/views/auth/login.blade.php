@extends('layouts.app')

@section('content')
<form action="{{ route('login') }}" method="POST" class="form-group">
    @csrf
    <div>
        <label for="title-input">Username</label>
        <input type="text" id="title-input" name="username" value="{{ old('username') }}">
        @error('username')
        <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="password-input">Username</label>
        <input type="password" id="password-input" name="password" value="{{ old('password') }}">
        @error('password')
        <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="remember-input">Remember me</label>
        <input type="checkbox" id="remember-input" name="remember" value="1" {{ old('remember') ? 'checked' : ''}}>
    </div>
    <div>
        <input type="submit" value="Login" class="btn">
    </div>
</form>
@endsection
