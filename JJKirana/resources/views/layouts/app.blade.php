<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('storage/images/favicon.png') }}" />
    <title>{{ env('APP_NAME') }} @yield('title') </title>
    <meta name="title" content="JJ Kirana Store Vapi" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Kirana shop vapi, Jj Kirana,vapi store, " />
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/icofont/icofont.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/framework/venobox/venobox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/framework/slickslider/slick.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/framework/niceselect/nice-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/framework/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    @yield('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    @if (!request()->is('login') && !request()->is('register') && !request()->is('password/*'))
        <x-master.desktop />
        <x-products.carts.slider />
        <x-master.mobile />
    @endif

    @yield('body')
    
    @if (!request()->is('login') && !request()->is('register') && !request()->is('password/*'))
        <x-master.footer />
    @endif
    <script src="{{ asset('js/framework/bootstrap/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/framework/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('js/framework/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/framework/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('js/framework/niceselect/nice-select.min.js') }}"></script>
    <script src="{{ asset('js/framework/slickslider/slick.min.js') }}"></script>
    <script src="{{ asset('js/framework/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('js/nice-select.js') }}"></script>
    <script src="{{ asset('js/countdown.js') }}"></script>
    <script src="{{ asset('js/accordion.js') }}"></script>
    <script src="{{ asset('js/venobox.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
