@extends('frontend.layouts.app')

@section('styles')



@endsection

@section('content')


    <section
            class="section hero header is-small is-light">
        <div class="hero-body">
            <div class="columns is-centered has-text-centered">
                <div class="column is-3">

                    <figure class="image">
                        <img class="" alt="" src="{{ asset('frontend/images/backgrounds/event.png') }}">
                    </figure>

                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">

            <div class="columns is-centered">


                <div class="column is-three-quarters">

                        @include('frontend.events.signup.partials.signup')

                </div>
            </div>

        </div>

    </section>

@endsection

@section('scripts')



@endsection