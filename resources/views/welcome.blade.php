<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>
    <body>

          @guest
            <a href="{{ route('login') }}">Login</a>
          @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
          @endif
          @else
            <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>

            @endguest

            @yield('content')
    </body>
</html>
