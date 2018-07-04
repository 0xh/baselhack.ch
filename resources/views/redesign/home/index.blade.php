@extends('redesign.layouts.app')

@section('styles')

@endsection

@section('content')


    <section style="background-image: linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ), url('{{ asset('redesign/images/backgrounds/messeplatz.jpg') }}');" class="hero is-fullheight is-dark is-bold has-background-image">

        <div class="hero-head">

            @include('redesign.layouts.partials._navigation')

        </div>

        <div class="hero-body">
            <div class="container has-text-centered">

                <img src="{{ asset('redesign/images/baselhack_logo_white.png') }}" alt="BaselHack">


            </div>
        </div>
    </section>


@endsection

@section('scripts')


@endsection