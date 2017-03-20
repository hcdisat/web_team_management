<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app" class="row">

        <section class="nav col s3">

            <div class="heading">
                <div class="img-account">
                    <img src="{{asset('img/user.png')}}" alt="">
                </div>
                <h5 class="user-account center white-text"> {{ Auth::user()->name }}</h5>
            </div>

            <ul class="cont-opciones">
                <router-link to="/emailings"><li>Emailings</li></router-link>
                <router-link to="/tasks"><li>Tasks</li></router-link>
                <router-link to="/traffic"><li>Traffic</li></router-link>
            </ul>

            <div class="close-session">
                    <a class="center white-text" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                       Cerrar Sessión
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
            </div>
        </section>

        <section class="col s9 m9">

            @yield('content')

        </section>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script>
</body>
</html>
