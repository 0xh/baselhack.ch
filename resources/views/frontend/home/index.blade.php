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

    {{--
        <section class="slice slice-lg bg-cover bg-size--cover" style="background: url('../assets/images/backgrounds/img-2.jpg') center center;">
            <div class="mask bg-dark alpha-7"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 ml-lg-auto">
                        <div class="card py-5 px-4 z-depth-3">
                            <div class="card-body">
                                <h2 class="heading h2">
                                    <strong>Design</strong> is thinking made visual.
                                </h2>
                                <p class="lead lh-180 mt-4">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna. Ut enim ad minim veniam quis nostrud exercitation.
                                </p>
                                <div class="btn-container mt-5">
                                    <a href="#" class="btn btn-lg btn-primary px-5">Our mission</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>--}}


@endsection
