<!doctype html>
<html lang="end" style="">
<head>
    @guest
        <a href="{{ route('login') }}">Login</a>
    @else
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
            ({{ auth()->user()->name }})
        </a>
    <form action="{{ route('logout') }}" method="post" id="logout-form">
        @csrf
    </form>
    @endguest
    <meta charset="UF-8">
    <meta name="viewport"
          content="width=device-width, user-scaleable=no, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title class="label">@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<table class="table">
    <tbody>@yield('content')</tbody>
</table>
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
