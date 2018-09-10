@extends('frontend.layouts.app')

@section('styles')

@endsection

@section('content')

    <section class="section hero header is-small is-light">
        <div class="hero-body">
            <div class="columns is-centered">

                <div class="column is-4">

                    <a href="{{ route('frontend.event.signup') }}">
                        <img class="image header-image" src="{{ asset('frontend/images/backgrounds/partners.png') }}">
                    </a>

                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">

            <div class="columns is-centered">


                <div class="column is-three-quarters">

                    <h1 class="title">Collaboration is key</h1>

                    <h3 class="subtitle">Why we want to partner with you?</h3>
                    <hr>

                    <div class="content">

                        <p class="has-text-justified">

                            The competitive power of a region is based on the creativity of its people and
                            organizations. Many regions struggle to retain or attract the highly educated and skilled
                            workforce.

                        </p>

                        <p class="has-text-justified">
                            BaselHack is a platform where people from different backgrounds, expertise, topics,
                            viewpoints and organizations come together to create new concepts and build solutions. Every
                            city needs such a melting pot.
                        </p>


                        <p class="has-text-justified">
                            We want to partner with you because this is not a one-time task you can check off your list.
                            It is a continuous engagement building an attractive place to live for everyone, just like
                            in a relationship.</p>


                        <p class="has-text-justified"> Everyone contributes in building something big. We want us to
                            come together so that BaselHack grows roots in the minds and hearts of everyone in the Basel
                            region.</p>


                        <p class="has-text-justified">We partner with organizations, government institutions and
                            education to grow BaselHack into an institution that we cannot imagine to be without. </p>
                    </div>


                    <h1 style="margin-top: 50px;" class="title">Our Partners</h1>
                    <hr>

                    <div style="margin-top: 25px;" class="columns is-multiline is-centered is-vcentered is-mobile">


                        @foreach(config('baselhack.partners') as $partner)

                            <div class="column is-2-desktop is-6-mobile">

                                <div style=" border-radius: 5px;" class="card sponsors">
                                    <div class="card-image">

                                        <figure class="image">
                                            <a target="_blank" title="{{ $partner['title'] }}"
                                               alt="{{ $partner['title'] }}" href="{{ $partner['url'] }}"><img
                                                        title="{{ $partner['title'] }}"
                                                        src="{{ asset('frontend/images/partners/' .  $partner['image']) }}"
                                                        alt="{{ $partner['title'] }}"></a>
                                        </figure>
                                    </div>

                                </div>

                            </div>



                        @endforeach


                    </div>


                </div>

            </div>

        </div>
    </section>


    @include('frontend.layouts.components._newsletter')

@endsection

@section('scripts')


@endsection