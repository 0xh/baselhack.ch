@extends('frontend.layouts.app')

@section('styles')

@endsection
@section('content')


    <section class="spotlight parallax bg-cover bg-size--cover" data-spotlight="fullscreen"
             style="background-image: url('{{ asset('frontend/images/backgrounds/img-1.jpg') }}')">
        <span class="mask bg-primary alpha-7"></span>
        <div class="spotlight-holder py-lg pt-lg-xl">
            <div class="container d-flex align-items-center no-padding">
                <div class="col">
                    <div class="row cols-xs-space align-items-center text-center text-md-left justify-content-center">
                        <div class="col-7">
                            <div class="text-center mt-5">
                                <img src="{{ asset('frontend/images/logo/baselhack_white.png') }}" style="width: 500px;"
                                     class="img-fluid animated" data-animation-in="jackInTheBox"
                                     data-animation-delay="1000">
                                <h2 class="heading display-4 font-weight-400 text-white mt-5 animated"
                                    data-animation-in="fadeInUp" data-animation-delay="2000">
                                    <span class="font-weight-700"></span>
                                </h2>
                                {{--<p class="lead text-white mt-3 lh-180 c-white animated" data-animation-in="fadeInUp" data-animation-delay="2500">
                                    Free HTML UI Kit based on the well known Bootstrap 4 Framework brought to you by <strong class="text-white">Webpixels</strong>
                                </p>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="slice sct-color-1">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space align-items-center">
                <div class="col-md-4 mx-auto">
                    <img src="{{ asset('frontend/images/random/about.gif') }}" class="img-center img-fluid rounded z-depth-3">
                </div>
                <div class="col-md-6 col-lg-5 ml-lg-auto">
                    <div class="pr-md-4">
                        <h3 class="heading heading-3 strong-500">
                            About BaselHack.
                        </h3>
                        <p class="lead text-gray mt-4">
                            At BaselHack, you will have the opportunity to create software prototypes solutions from a great idea in 34 hours! Bring your coding know-how, meet, connect and collaborate with other tech enthusiasts, innovators, and data and design wizards.
                            You can work on your own idea or join a team. At the end of the second day of hacking, you will present your idea and prototype to a panel of judges and to all participants. Prizes will be awarded for the best ideas and teams.
                            Your prototype will be published as OpenSource and may be developed further after the event.                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5 bg-lighter border-top border-bottom" id="scrollToSection">
        <div class="container">

            <h2 class="text-center">Sign-Up for our newsletter</h2>


            <div class="d-flex align-items-center justify-content-center mt-4">

                <form method="POST" action="{{ route('frontend.newsletter.store') }}"class="heading mt-0 mb-0">
                    @csrf

                    <div class="input-group mb-3">

                        <input id="email" name="email" type="text" class="form-control" placeholder="E-Mail Address" aria-label="E-Mail Address" aria-describedby="basic-addon2" required>
                        <div class="input-group-append">
                            <button dusk="subscribe-for-newsletter-button" class="btn btn-primary newsletter-button" type="submit">subscribe</button>
                        </div>
                    </div>



                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif


                </form>

            </div>
        </div>
    </section>


    <section class="slice slice-lg" data-delimiter="1">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space align-items-center">

                <div class="col-md-6 col-lg-5 ml-lg-auto">
                    <div class="pr-md-4">
                        <h3 class="heading h3">
                            Why you should attend?
                        </h3>
                        <div class="lead text-gray mt-4">

                        <ul>
                            <li>You will meet other tech enthusiasts.</li>
                            <li>You will build a great prototype in teams over two days.</li>
                            <li>
                                You are into coding and you will have the opportunity to showcase your skills.</li>
                            <li>  Most importantly, you will spend two amazing days!</li>
                            <li>  And the best thing is: it won't cost you anything. Food and drinks are provided.</li>

                        </ul>





                            You won't regret participating in BaselHack! Come and see for yourself.

                            </div>

                    </div>
                </div>


                <div class="col-md-4 mx-auto">
                    <img src="{{ asset('frontend/images/random/why.gif') }}" class="img-center img-fluid rounded z-depth-3">
                </div>

            </div>
        </div>
    </section>


    <section class="slice sct-color-1">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space align-items-center">
                <div class="col-md-4 mx-auto">
                    <img src="{{ asset('frontend/images/random/who.gif') }}" class="img-center img-fluid rounded z-depth-3">
                </div>
                <div class="col-md-6 col-lg-5 ml-lg-auto">
                    <div class="pr-md-4">
                        <h3 class="heading heading-3 strong-500">
                            Who can participate?
                        </h3>
                        <p class="lead text-gray mt-4">
                            Anyone! BaselHack brings together techies, programmers, UX/UI designers, developers, soft-ware engineers, computing veterans, etc. Above all, BaselHack is open to anyone – men, women, students, seniors, cooks, mechanics… any curious and creative minds!                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="slice slice-lg" data-delimiter="1">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space align-items-center">

                <div class="col-md-6 col-lg-5 ml-lg-auto">
                    <div class="pr-md-4">
                        <h3 class="heading h3">
                            Who is organizing BaselHack?
                        </h3>
                        <p class="lead text-gray mt-4">

                            BaselHack is organized by the non-profit organisation BaselHack.
                            We are organizing this event out of passion for technology and simply for fun; not to earn money.
                            Our community is growing. You want to join us? Get in touch!

                        </p>

                    </div>
                </div>


                <div class="col-md-4 mx-auto">
                    <img src="{{ asset('frontend/images/random/us.gif') }}" class="img-center img-fluid rounded z-depth-3">
                </div>

            </div>
        </div>
    </section>



@endsection
