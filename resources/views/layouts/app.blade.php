<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <ul>
            @if(!auth()->check())
                <li><a href="{{route('auth.login')}}">Login</a></li>
                <li><a href="{{route('auth.register')}}">Register</a></li>
            @else
                <li>Welcome {{ auth()->user()->name}}</li>
                <li><a href="{{route('auth.logout')}}">Cerrar sesion</a></li>
            @endif
        </ul>
    </nav>
    @yield('content')
</body>
</html>