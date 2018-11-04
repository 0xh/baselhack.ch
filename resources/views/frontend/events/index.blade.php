@extends('frontend.layouts.app')

@section('styles')

@endsection

@section('content')



    <section class="section hero header is-small is-light">
        <div class="hero-body">
            <div class="columns is-centered">
                <div class="column is-3">
                    <figure class="image">
                        <img  class="" alt="" src="{{ asset('frontend/images/backgrounds/event.png') }}">
                    </figure>
                </div>
            </div>
        </div>
    </section>



    <section class="section">
        <div class="container">

            <div class="columns is-centered">


                <div class="column is-three-quarters">

                <h1 class="title">At BaselHack</h1>
                    <h2 class="subtitle">Why we want to partner with you?</h2>
                    <hr>


                    <div class="content">

                    <p class="has-text-justified">
                        you meet, connect and collaborate with tech enthusiasts, creative minds, data specialist, design
                        wizards and visionaries.

                        Bring your own idea or join a team to create a running prototype that can be presented to a
                        panel of judges and the Basel Area audience.

                      Your prototype will be published Open Source and hopefully live on beyond the event, being
                        developed for the region.
                    </p>

                    </div>


                    <h3 style="margin-top: 20px;" class="subtitle">Why you should attend?</h3>
                    <hr>

                    <div class="content">

                        <ul>

                            <li>You will spend two amazing days!</li>
                            <li>You have the opportunity to showcase your skills.</li>
                            <li>And the best thing is: it won't cost you anything. Food and drinks are provided.</li>
                        </ul>

                    </div>


                    <h3 class="subtitle">Who can participate?</h3>
                    <hr>


                    <div class="content">



                    <p class="has-text-justified">
                        Everyone!
                        BaselHack brings together techies, programmers, UX/UI designers, developers, software engineers,
                        computing veterans, etc. BaselHack is open to everyone: men, women, students, seniors, cooks,
                        mechanics, geniuses … make sure you bring your curiosity and creativity!
                    </p>



                    </div>




                        <a href="{{ route('frontend.events.signup.index') }}" class="button is-success">Sign-Up now!</a>



                </div>

            </div>

        </div>

    </section>



    @include('frontend.layouts.components._newsletter')


@endsection

@section('scripts')


@endsection