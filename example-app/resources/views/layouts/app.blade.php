<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="{{ route('home') }}">
                        Домой
                    </a>
                </li>

                <li>
                    <a href="{{ route('about') }}">
                        О нас
                    </a>
                </li>
                @if(auth()->check())
                    <li>
                        <a href="{{ route('user') }}">
                            Пользователи
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('page') }}">
                            Страницы
                        </a>
                    </li>
                @else
                    <li>
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
            Привет, {{auth()->user()->name}} !

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
</body>
</html>
