@extends('frontend.layouts.app')

@section('styles')

@endsection
@section('content')


    <section class="spotlight parallax bg-cover bg-size--cover" data-spotlight="fullscreen" style="background-image: url('{{ asset('images/backgrounds/img-1.jpg') }}')">
        <span class="mask bg-primary alpha-7"></span>
        <div class="spotlight-holder py-lg pt-lg-xl">
            <div class="container d-flex align-items-center no-padding">
                <div class="col">
                    <div class="row cols-xs-space align-items-center text-center text-md-left justify-content-center">
                        <div class="col-7">
                            <div class="text-center mt-5">
                                <img src="{{ asset('images/brand/baselhack.png') }}" style="width: 500px;" class="img-fluid animated" data-animation-in="jackInTheBox" data-animation-delay="1000">
                                <h2 class="heading display-4 font-weight-400 text-white mt-5 animated" data-animation-in="fadeInUp" data-animation-delay="2000">
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


@endsection
