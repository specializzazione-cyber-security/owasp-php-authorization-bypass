<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <nav class="nav-custom fixed-top bg-primary-subtle p-4 shadow">
        <div class="container-fluid h-100">
            <div class="row justify-content-between align-items-center h-100">
                <div class="col-2 h-100 d-flex flex-column justify-content-center">
                    <a href="/" class="text-decoration-none text-black">BlogPocoSicuro</a>
                </div>
                <div class="col-6">
                    <ul class="d-flex my-auto align-items-center justify-content-end  list-unstyled">
                        @auth
                            <li class="mx-3 fw-light">
                                <a class="text-decoration-none text-black" href="">Ciao! {{ Auth::user()->name }}</a>
                            </li>
                        @endauth
                        <li class="mx-3">
                            <a class="text-decoration-none text-black" href="{{ route('welcome') }}">Homepage</a>
                        </li>

                        @auth
                            {{-- ? Link Admin  --}}
                            @if (Auth::user()->is_admin)
                                <li class="mx-3">
                                    <a class="text-decoration-none text-black" href="{{ route('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="mx-3">
                                    <a class="text-decoration-none text-black" href="{{ route('article.create') }}">Crea
                                        Articolo</a>
                                </li>
                            @endif

                            {{-- ? Logout  --}}
                            <li class="mx-3">
                                <a class="text-decoration-none text-black" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a>
                            </li>
                            <form method="POST" action="{{ route('logout') }}" style="display: none" id="form-logout">
                                @csrf
                            </form>
                        @endauth
                        @guest
                            <li class="mx-3">
                                <a class="text-decoration-none text-black" href="{{ route('login') }}">Login</a>
                            </li>
                        @endguest


                        {{-- <li></li>
                        <li></li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    {{ $slot }}

</body>

</html>
