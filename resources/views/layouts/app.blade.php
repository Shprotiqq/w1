<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css"
    />
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <title>@yield('title', env('APP_NAME'))</title>
    <meta name="description" content="@yield('description', env('APP_NAME'))">


    <link href="{{ mix('/css/fonts.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/simplebar.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/style.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/media.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/slick.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/slick-theme.css') }}" rel="stylesheet">
    <script src="{{ mix('/js/app.js') }}" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>


    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/storage/{{ $settings['favicon_png']->image }}">
    <link rel="icon" type="image/png" sizes="16x16" href="/storage/{{ $settings['favicon_png']->image }}">

    {!! $settings['code_in_head']->value !!}

</head>
<body>

@include('shared.alert')
@include('shared.header')
<hr>
<main>
    @yield('content')
</main>
<hr>

@include('shared.footer')



<noscript>
    <style>
        /**
        * Reinstate scrolling for non-JS clients
        */
        .simplebar-content-wrapper {
            scrollbar-width: auto;
            -ms-overflow-style: auto;
        }

        .simplebar-content-wrapper::-webkit-scrollbar,
        .simplebar-hide-scrollbar::-webkit-scrollbar {
            display: initial;
            width: initial;
            height: initial;
        }
    </style>
</noscript>

</body>
</html>
<?php
