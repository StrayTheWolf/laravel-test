<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body class="ms-4">
    <header>
        <nav class="d-inline-flex p-2 bd-highlight w-100 justify-content-center">
            <ul class="d-flex">
                <li class="ps-3 list-group-item">
                    <a href="{{ route('home') }}">
                        Домой
                    </a>
                </li>

                <li class="ps-3 list-group-item">
                    <a href="{{ route('about') }}">
                        О нас
                    </a>
                </li>
                @if(auth()->check())
                    <li class="ps-3 list-group-item">
                        <a href="{{ route('user') }}">
                            Пользователи
                        </a>
                    </li>

                    <li class="ps-3 list-group-item">
                        <a href="{{ route('page') }}">
                            Страницы
                        </a>
                    </li>
                @else
                    <li class="ps-3 list-group-item">
                        <a href="{{ route('login') }}">
                            Логин
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    </header>
    <main>
        @if(auth()->check())
            <h2>
                Привет, {{auth()->user()->name}} !
            </h2>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button>
                    Выйти
                </button>
            </form>
        @endif


        @yield('content')
    </main>

    <footer>
        &copy; Copyright
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
