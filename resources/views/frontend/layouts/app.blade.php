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


    @include('frontend.layouts.partials._meta')

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-oi8o31xSQq8S0RpBcb4FaLB8LJi9AT8oIdmS1QldR8Ui7KUQjNAnDlJjp55Ba8FG" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('frontend/css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bulma.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

    @yield('styles')


    <script async src="{{ config('analytics.google.url') }}"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag({{ config('analytics.google.key') }});
    </script>


</head>

<body>

@include('frontend.layouts.partials._navigation')


@yield('content')

@include('frontend.layouts.partials._footer')

<script src="{{ asset('frontend/js/modernizr.js') }}"></script>
<script src="{{ asset('frontend/js/navigation.js') }}"></script>
<script src="{{ asset('frontend/js/retina.min.js') }}" defer></script>
<script src="{{ asset('frontend/js/sweetalert.js') }}"></script>

@include('sweetalert::alert')

@yield('scripts')

</body>
</html>
