@extends('frontend.layouts.app')

@section('styles')

@endsection

@section('content')

    @include('frontend.layouts.components._header')



    <section class="section">
        <div class="container">

            <div class="columns is-centered">

                <div class="column is-three-fifths">

                    <h1 class="title">About Us</h1>
                    <h2 class="subtitle">BaselHack is more than a Hackathon – we connect people, take fun seriously and grow open innovation</h2>
                    <hr>


                    <p class="has-text-justified">
                        A Team of 32 dedicated people inspired to create a space for

                    </p>


                    <div class="content">



                        <ul>

                            <li>Ideas</li>
                            <li>Open Innovation</li>
                            <li>Community</li>
                            <li>Learning</li>
                        </ul>

                    </div>




                    <p class="has-text-justified">
                        in Basel, build a solid foundation to anchor it in the Basel Region as an institution no-one ever wants to miss again.


                        With conviction and enjoyment!
                    </p>


                </div>

                </div>

        </div>
    </section>





    @include('frontend.layouts.components._newsletter')


@endsection

@section('scripts')


@endsection