<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'BaselHack' }}</title>

    <!-- Fonts -->
    <link href="{{ asset('backend/css/webfonts/fonts.css') }}" rel="stylesheet" type="text/css">

    <script defer src="https://pro.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-+1nLPoB0gaUktsZJP+ycZectl3GX7wP8Xf2PE/JHrb7X1u7Emm+v7wJMbAcPr8Ge" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('backend/css/app.css') }}" rel="stylesheet">



    @yield('styles')

</head>
<body>
<div id="app">

    @include('backend.layouts.partials._navigation')

    <main class="py-4">
        @yield('content')
    </main>

    @include('backend.layouts.partials._footer')

    <script src="{{ asset('backend/js/app.js') }}" defer></script>
    <script src="{{ asset('backend/js/retina/retina.min.js') }}" defer></script>
    <script src="{{ asset('backend/js/sweetalert/sweetalert.js') }}"></script>
    @include('sweetalert::alert')

    @yield('scripts')
</div>
</body>
</html>
