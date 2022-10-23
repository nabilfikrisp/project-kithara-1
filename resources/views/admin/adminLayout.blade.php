<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <title>Kithara</title>
    <link rel="icon" href="/image/logo/logo.png" type="image">
    @yield('head')
</head>

<body>
    @if(Auth::user())
    <div class="mt-5 mb-4">
        <h1 class="text-center">Admin Page</h1>
        <h2 class="text-center">Hello, {{ Auth::user()->name }}</h2>
    </div>
    @yield('content')
    @endif
</body>

</html>