<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- BOOTSTRAP CSS -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/skin-modes.css')}}" rel="stylesheet" />

    <!-- SIDE-MENU CSS -->
    <link href="{{ asset('plugins/sidemenu/closed-sidemenu.css')}}" rel="stylesheet">

    <!-- SINGLE-PAGE CSS -->
    <link href="{{ asset('plugins/single-page/css/main.css')}}" rel="stylesheet" type="text/css">

    <!--C3 CHARTS CSS -->
    <link href="{{ asset('plugins/charts-c3/c3-chart.css')}}" rel="stylesheet" />

    <!-- CUSTOM SCROLL BAR CSS-->
    <link href="{{ asset('plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('css/icons.css')}}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('colors/color1.css')}}" />
    @stack("styles")
</head>

<body>
    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">

        @include('layouts.includes.loader')

        @yield('content')

    </div>

    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/popper.min.js')}}"></script>

    <!-- SPARKLINE JS -->
    <script src="{{ asset('js/jquery.sparkline.min.js')}}"></script>

    <!-- CHART-CIRCLE JS -->
    <script src="{{ asset('js/circle-progress.min.js')}}"></script>

    <!-- RATING STAR JS -->
    <script src="{{ asset('plugins/rating/jquery.rating-stars.js')}}"></script>

    <!-- INPUT MASK JS -->
    <script src="{{ asset('plugins/input-mask/jquery.mask.min.js')}}"></script>

    <!-- CUSTOM SCROLL BAR JS-->
    <script src="{{ asset('plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

    <!-- CUSTOM JS-->
    <script src="{{ asset('js/custom.js')}}"></script>

    <!-- CAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @stack("scripts")
</body>

</html>