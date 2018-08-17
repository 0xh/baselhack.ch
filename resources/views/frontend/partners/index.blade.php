@extends('frontend.layouts.app')

@section('styles')

@endsection

@section('content')

    @include('frontend.layouts.components._header')

                <section class="section">
                    <div class="container">

                        <div class="columns is-centered">


                <div class="column is-three-quarters">

                <h1 class="title">Collaboration is key</h1>

                    <h3 class="subtitle">Why we want to partner with you?</h3>
                    <hr>

                    <div class="content">

                        <p class="has-text-justified">
                            Human capital is the essential resource for today’s innovation and knowledge based economy.
                            The competitive power of a region is based on the creativity of its people and
                            organizations. Many regions struggle to retain or attract the highly educated and skilled
                            workforce.
                        </p>

                        <p class="has-text-justified">
                            This is not a one-time task you can check off your list. It is a continuous engagement to
                            stay attractive, just like in a relationship. Only here we speak about organizations,
                            government institutions
                        </p>


                        <p class="has-text-justified">
                            BaselHack is a platform where people from different backgrounds, expertise, topics,
                            viewpoints and organizations come together to create new concepts and build solutions. Every
                            city needs such a melting pot. To be able to keep all stakeholders engaged, everyone has to
                            contribute. We want us to come together so that BaselHack can grow roots in the minds and
                            hearts of many so that it gets a solid foundation as an institution of the Basel region.
                        </p>


                    </div>


                    <h3 class="subtitle">What are your benefits?</h3>
                    <hr>

                    <div class="content">

                        <ul>

                            <li>Social Impact: Aus der Region, für die Region</li>
                            <li>Access to top talents in action</li>
                            <li>Brand positioning</li>
                            <li>Brand visibility in extensive networks: sponsors, location partners, the professional
                                networks of 32 organizers
                            </li>
                            <li>Inspiration for your employees</li>
                            <li>Innovation accelerator</li>

                        </ul>

                    </div>




                    <h1 style="margin-top: 50px;" class="title">Partners</h1>

                    <h3 class="subtitle">We proudly present our partners!</h3>




                    <div style="margin-top: 25px;" class="columns is-multiline is-centered is-vcentered is-mobile">


                        @foreach(config('baselhack.partners') as $partner)

                            <div class="column is-2-desktop is-6-mobile">

                                <div style=" border-radius: 5px;" class="card sponsors">
                                    <div class="card-image">

                                        <figure class="image">
                                            <a target="_blank" title="{{ $partner['title'] }}"  alt="{{ $partner['title'] }}" href="{{ $partner['url'] }}"><img
                                                        title="{{ $partner['title'] }}" src="{{ asset('frontend/images/sponsors/' .  $partner['image']) }}"
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