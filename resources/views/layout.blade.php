<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/homePage.css') }}">
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <title>Kithara</title>
    <link rel="icon" href="/image/logo/logo.png" type="image">
    @yield('head')
</head>

<body>
    <nav class="navbar navbar-expand-lg pos-sticky" style="z-index: 9999; background-color:rgb(88, 59, 5); opacity:0.9">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="col navbar-nav justify-content-start">
                    <li class="nav-item">
                        <a class="nav-link nav-text" aria-current="page" href="{{ route('landing') }}">
                            <!-- <img src="/image/logo/logo.png" alt="Logo Kitharra" class="nav-logo"> -->
                            Home
                        </a>
                    </li>
                </ul>
                <ul class="col navbar-nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link nav-text" aria-current="page" href="{{ route('reparasiAll') }}">Reparasi Gitar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text" aria-current="page" href="{{ route('cekResi') }}">Cek Resi</a>
                    </li>
                </ul>
                <ul class="col navbar-nav justify-content-end">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link nav-text" aria-current="page" href="{{ route('login') }}">Login</a>
                    </li>
                    @endauth
                    @if (Auth::user())
                    @if (Auth::user()->is_admin == 1)
                    <li class="nav-item">
                        <a class="nav-link nav-text" aria-current="page" href="/admin/orders/">Admin</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link nav-text" aria-current="page" href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text" aria-current="page" href="{{ route('logout') }}">Logout</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>