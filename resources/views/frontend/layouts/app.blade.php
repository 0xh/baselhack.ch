<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <head>
        {!! seo_helper()->render() !!}
    </head>

    @include('frontend.layouts.partials._favicons')

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-9ralMzdK1QYsk4yBY680hmsb4/hJ98xK3w0TIaJ3ll4POWpWUYaA2bRjGGujGT8w" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('frontend/css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bulma.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

    @yield('styles')

</head>

<body>

@include('frontend.layouts.partials._navigation')

@yield('content')

@include('frontend.layouts.partials._footer')

<script src="{{ asset('frontend/js/navigation.js') }}"></script>
<script src="{{ asset('frontend/js/sweetalert.js') }}"></script>

@include('sweetalert::alert')

@yield('scripts')

</body>
</html>
