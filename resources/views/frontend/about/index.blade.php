@extends('frontend.layouts.app')

@section('styles')

@endsection

@section('content')

    <section class="section hero header is-small is-light">
        <div class="hero-body">
            <div class="columns is-centered">

                <div class="column is-4">

                    <a href="{{ route('frontend.event.signup') }}">
                        <img class="image header-image" src="{{ asset('frontend/images/backgrounds/about.png') }}">
                    </a>

                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">

            <div class="columns is-centered">


                <div class="column is-three-quarters">

                <h1 class="title">About Us</h1>
                    <h2 class="subtitle">BaselHack is more than a Hackathon – we connect people, take fun seriously and
                        grow open innovation</h2>
                    <hr>

                    <div class="content">

                    <p class="has-text-justified">
                        A Team of 32 dedicated people inspired to create a space for
                    </p>



                        <ul>
                            <li>Ideas</li>
                            <li>Open Innovation</li>
                            <li>Community</li>
                            <li>Learning</li>
                        </ul>


                        <p class="has-text-justified">
                            in Basel, build a solid foundation to anchor it in the Basel Region as an institution no-one
                            ever wants to miss again. With conviction and enjoyment!
                        </p>


                    </div>



                </div>

            </div>

        </div>
    </section>


 {{--   <section class="section">
        <div class="container">

            <div class="columns is-centered">

                <div class="column is-three-fifths">

                    <h1 class="title">Team</h1>
                    <h2 class="subtitle">People behind the scene</h2>
                    <hr>


                    <div class="content">

                    <p class="has-text-justified">
                        A Team of 32 dedicated people inspired to create a space for
                    </p>


                    </div>


                    <div class="columns is-multiline">

                        <div class="column is-4">

                            <div class="card">
                                <div class="card-image is-hidden-mobile">
                                    <figure class="image is-4by3">
                                        <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <p class="title is-5">Jutta Jerlich</p>
                                            <p class="subtitle is-6">@johnsmith</p>
                                        </div>
                                    </div>

                                    <div class="content">
                                         <a style="margin-right: 7px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                         <a  style="margin-right: 7px;" href="#"><i class="fab fa-xing"></i></a>
                                         <a  style="margin-right: 7px;" href="#"><i class="fab fa-twitter"></i></a>
                                         <a  style="margin-right: 7px;" href="#"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
--}}



    @include('frontend.layouts.components._newsletter')


@endsection

@section('scripts')


@endsection