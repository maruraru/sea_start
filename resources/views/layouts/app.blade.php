<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css?1') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Oswald:400,600,700" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body >
<header class="blue-background">

    <div class="container-fluid py-2">
        <div class='row align-items-center'>
            <div class="col-4">
                <a href="#" class="navbar-brand">
                    <img class="icon-48" src="{{ asset('images/icons/sevsu_logo.png') }}" alt=" "/>
                </a>
            </div>
            <div class="col-4 text-right">
                <a href="{{ url('/') }} ">
                    <h1 class="font-light font-3 weight-700 mb-0 float-right">Морской старт</h1>
                </a>
                <h3 class="font-light font-1 weight-600 float-right ">seastart@sevsu.ru</h3>
            </div>
            <div class="col-4">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="link d-inline-flex align-items-end font-08 uppercase" >{{ __('Вход') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a  href="{{ route('register') }}" class="link d-inline-flex align-items-end font-08 uppercase">{{ __('Регистрация') }}</a>
                        @endif
                    </li>
                @else
                    <a href="{{ url('/home') }}" class="link d-inline-flex align-items-end font-08 uppercase">
                        <img class="icon-24" src="{{ asset('images/icons/user.png') }} " alt=" " />
                        Личный кабинет
                    </a>
                    <div >
                        <a  href="{{ route('logout') }}" class="link d-inline-flex align-items-end font-08 uppercase"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            {{ __('Выйти') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer class="footer blue-background">
    <div class="container mx-1">
        <div class="row mt-4 pt-2 pl-1 d-flex align-items-center">
            <div class="col-2">
                <a href="#" class="navbar-brand float-left pl-4">
                    <img class="icon-48" src="{{ asset('images/icons/sevsu_logo_no_text.png') }}" alt=" "/>
                </a>
            </div>
            <div class="col-5 mt-2">
                <h5 class="font-light font-08 weight-600 uppercase o-sans mb-0">Морской старт</h5>
                <h5 class="font-light font-08 weight-600 uppercase o-sans">Оргкомитет: seastart@sevsu.ru</h5>
            </div>
            <div class="col-4">
                <h5 class="font-light font-08 weight-600 uppercase o-sans mb-0 pl-4">Мы в соцсетях</h5>
                <a href="#" class="mr-1"> <img class="icon-18 " src="{{ asset('images/icons/vk.png') }} " alt=" "/></a>
                <a href="#" class="mr-1"><img class="icon-20" src="{{ asset('images/icons/telegram.png') }}" alt=" "/></a>
                <a href="#" class="mr-1"><img class="icon-20 " src="{{ asset('images/icons/facebook.png') }}" alt=" "/></a>
                <a href="#" class="mr-1"> <img class="icon-20" src="{{ asset('images/icons/instagram.png') }}" alt=" "/></a>
                <a href="#" class="mr-1"><img class="icon-20 " src="{{ asset('images/icons/twitter.png') }}" alt=" "/></a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>