@extends('frontend.layouts.app')

@section('styles')




@endsection

@section('content')

    <section class="section hero header is-small is-light">
        <div class="hero-body">
            <div class="columns is-centered">

                <div class="column is-4">
                    <figure class="image">
                        <a href="{{ route('frontend.event.signup') }}"><img class="" alt=""
                                                                            src="{{ asset('frontend/images/backgrounds/todo.svg') }}"></a>
                    </figure>
                </div>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">

            <div class="columns is-centered">

                <div class="column is-three-quarters">

                    <div class="content">

                        <p class="has-text-justified">

                            The competitive power of a region is based on the creativity of its people and
                            organizations. Every city needs such a melting pot. Born in 2017, the Basel Hackathon is
                            organized by the non-profit organisation BaselHack, consisting of 22 creative enthusiasts
                            from different backgrounds and organizations from the Basel Region with a diversity of
                            skills.
                        </p>

                        <p class="has-text-justified">
                            We came together because we believe that Basel needed a hack. We want to inspire talents,
                            thinkers and creative spirits to come together, work in teams as equals, creating solutions
                            for the region. The goal is to present running prototypes at the end of an about 30 hour
                            weekend.
                        </p>

                        <p class="has-text-justified">

                            We promise you: Be part of BaselHack once – as an expert, mentor, sponsor, supporting
                            partner or just as a visitor - and you will continue to come every time. </p>


                        <p class="has-text-justified">
                            We are organizing BaselHack out of passion for technology and simply for fun!
                            Our community is growing. You want to join us?


                        </p>


                        <p class="has-text-justified">

                            <a href="" class="button is-dark">Sign up BaselHack 2018</a>

                        </p>



                    </div>
                </div>

            </div>


        </div>
    </section>




    @include('frontend.layouts.components._newsletter')

@endsection

@section('scripts')


@endsection