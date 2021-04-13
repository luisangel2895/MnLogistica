{{--
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    MN Logistica
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <!doctype html>
        <html lang="en" class="fullscreen-bg">

        <head>
            <title>Login</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
            <!-- VENDOR CSS -->

            <link rel="stylesheet" href="{{asset('static/bootstrap/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('static/font-awesome/css/font-awesome.min.css')}}">
            <link rel="stylesheet" href="{{asset('static/linearicons/style.css')}}">
            <link rel="stylesheet" href="{{asset('static/chartist/css/chartist-custom.css')}}">

            <!-- MAIN CSS -->
            <link rel="stylesheet" href="{{asset('css/main.css')}}">
            <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
            <link rel="stylesheet" href="{{asset('css/demo.css')}}">

            <!-- GOOGLE FONTS -->
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
            <!-- ICONS -->
            <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">

            <link rel="icon" type="image/png" sizes="96x96" href="{{asset('img/logo.png')}}">
        </head>

        <body>
            <div class="main">
                @yield('content')
            </div>
        </body>

        </html>
