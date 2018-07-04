<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="BaselHack is more than a Hackathon – we connect people, take fun seriously and grow open">
    <meta name="author" content="BaselHack">
    <meta name="keywords" content="BaselHack, Hackathon, connect, talents, serious fun, open innovation, Basel Stadt, Basel Land, Jura, Dreiländereck">

    <title>BaselHack - More than a Hack</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-oi8o31xSQq8S0RpBcb4FaLB8LJi9AT8oIdmS1QldR8Ui7KUQjNAnDlJjp55Ba8FG" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('redesign/css/bulma.css') }}">
    <link rel="stylesheet" href="{{ asset('redesign/css/bulma-extensions.css') }}">
    <link rel="stylesheet" href="{{ asset('redesign/css/style.css') }}">

    @yield('styles')

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-82376109-14"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-82376109-14');
    </script>


</head>

<body>


@yield('content')

@include('redesign.layouts.partials._footer')

<script src="{{ asset('redesign/js/navigation.js') }}"></script>
<script src="{{ asset('redesign/js/retina.min.js') }}" defer></script>
<script src="{{ asset('redesign/js/sweetalert.js') }}"></script>

@include('sweetalert::alert')

@yield('scripts')

</body>
</html>
