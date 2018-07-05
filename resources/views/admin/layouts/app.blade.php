<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Департамент Аукционных Продаж - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('font/stylesheet.css') }}" rel="stylesheet">

    

    <!-- helium ui kit styles -->
    <link rel="stylesheet" href="{{ asset('css/plugs/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugs/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugs/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugs/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugs/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugs/responsive.css') }}">

      <!-- Fonts icons -->
    <link rel="stylesheet" href="{{ asset('css/plugs/font-awesome.min.css') }}">

    <!-- common styles -->
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">

    <script src="//cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body class="bg-light">
    <!-- Page Wrapper Start -->

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))
        <div class="alert alert-{{ $msg }} col-md-12 alert-dismissible fade show" style="" role="alert">
        {{ Session::get('alert-' . $msg) }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
      @endif
    @endforeach
    @if (session()->has('message'))
        <div class="alert alert-info">{{ session('message') }}</div>
    @endif

    <nav class="navbar navbar-toggleable-sm navbar-light bg-default">
        <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            На главную
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar1">
            <ul class="navbar-nav">

            @guest

            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        Выход
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endguest
            
            </ul>
        </div>
        </div>
    </nav>


    <main class="py-4">
        @yield('content')
    </main>

    <!-- Page Wrapper End -->
    <!-- helium ui kit scripts -->
    <script src="{{ asset('js/plugs/jquery.min.js') }}"></script>
    <script src="{{ asset('js/plugs/tether.min.js') }}"></script>
    <script src="{{ asset('js/plugs/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/plugs/form-validator.min.js') }}"></script>
    <script src="{{ asset('js/plugs/contact-form-script.js') }}"></script>
    <script src="{{ asset('js/plugs/main.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script> 
</body>
</html>
