@if(!empty($current_page))

    <title>{{ __('frontend/' . $current_page . '.meta.title') }}</title>

    <meta name="robots" content="{{ config('meta.robots') }}">
    <meta name="author" content="{{ config('meta.author') }}"/>

    <meta name="description" content="{{ __('frontend/' . $current_page . '.meta.description') }}"/>
    <meta name="keywords" content="{{ __('frontend/' . $current_page . '.meta.keywords') }}">

    <meta property="og:type" content=""/>
    <meta property="og:locale" content="{{ app()->getLocale() }}"/>
    <meta property="og:site_name" content="{{ __('frontend/' . $current_page . '.meta.title') }}"/>

    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:title" content="{{ __('frontend/' . $current_page . '.meta.title') }}"/>
    <meta property="og:description" content="{{ __('frontend/' . $current_page . '.meta.description') }}}"/>
    <meta property="og:image" content="{{ asset('frontend/images/backgrounds/baselhack.png') }}"/>

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{ __('frontend/' . $current_page . '.meta.title') }}">
    <meta name="twitter:description" content="{{ __('frontend/' . $current_page . '.meta.description') }}}">
    <meta name="twitter:image" content="{{ asset('frontend/images/backgrounds/baselhack.png') }}">

    <meta itemprop="name" content="{{ __('frontend/' . $current_page . '.meta.title') }}">
    <meta itemprop="description" content="{{ __('frontend/' . $current_page . '.meta.description') }}}">
    <meta itemprop="image" content="{{ asset('frontend/images/backgrounds/baselhack.png') }}">

    @include('frontend.layouts.partials._favicons')

@endif

