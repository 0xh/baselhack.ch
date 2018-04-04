<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Probably the most complete UI kit out there. Multiple functionalities and controls added,  extended color palette and beautiful typography, designed as its own extended version of Bootstrap at  the highest level of quality.                             ">
    <meta name="author" content="Webpixels">

    <title>{{ config('app.name', 'BaselHack') }}</title>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800|Roboto:400,500,700" rel="stylesheet">
    <!-- Theme CSS -->
    <link type="text/css" href="{{ asset('css/frontend/theme.css') }}" rel="stylesheet">
    <!-- Demo CSS - No need to use these in your project -->
    <link type="text/css" href="{{ asset('css/frontend/demo.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-L+XK540vkePe55E7PAfByfvW0XpsyYpsifTpgh/w8WvH6asVg/c2zqp0EfZfZTbF" crossorigin="anonymous">

    @yield('styles')

</head>
<body>

    @include('frontend.layouts.partials.navigation')


    <main class="main">
        @yield('content')
    </main>




    @include('frontend.layouts.partials.footer')


    <!-- Core -->
    <script src="{{ asset('js/frontend/jquery.min.js') }}"></script>
    <script src="{{ asset('js/frontend/bootstrap.min.js') }}"></script>
    <!-- FontAwesome 5 -->
    <script src="{{ asset('js/frontend/fontawesome-all.js') }}" defer></script>
    <!-- Page plugins -->
    <script src="{{ asset('js/frontend/bootstrap-select.js') }}"></script>
    <script src="{{ asset('js/frontend/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('js/frontend/input-mask.min.js') }}"></script>
    <script src="{{ asset('js/frontend/nouislider.min.js') }}"></script>
    <script src="{{ asset('js/frontend/textarea-autosize.min.js') }}"></script>
    <!-- Theme JS -->
    <script src="{{ asset('js/frontend/theme.js') }}"></script>


</body>
</html>
