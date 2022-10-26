<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <title>Kithara</title>
    <link rel="icon" href="/image/logo/logo.png" type="image">
    <link rel="stylesheet" href="{{ asset('/css/sidebars.css') }}">
    @yield('head')
</head>

<body>
    @if (Auth::user())
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark position-fixed "
            style="width: 280px; height:100vh; position:sticky">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4">Hi, {{ Auth::user()->name }}!</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="/" class="nav-link text-white">
                        Landing Page
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('adminUser') }}" class="nav-link text-white">
                        Data Users
                    </a>
                </li>
                <li>
                    <a href="{{ route('adminService') }}" class="nav-link text-white">
                        Data Services
                    </a>
                </li>
                <li>
                    <a href="/admin/orders/" class="nav-link text-white">
                        Data Orders
                    </a>
                </li>
            </ul>

        </div>

        <div style="padding-left: 15vw; padding-top:2vh">
            @yield('content')
        </div>
    @endif
    <script src="{{ asset('/js/sidebars.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
