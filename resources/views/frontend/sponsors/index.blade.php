@extends('frontend.layouts.app')

@section('styles')

@endsection

@section('content')

    @include('frontend.layouts.components._header')

    <section class="section">
        <div class="container">

            <div class="columns is-centered">


                <div class="column is-three-quarters">


                    <h1 class="title">Sponsoring</h1>

                    <h3 class="subtitle">Much more than a Hackathon</h3>
                    <hr>

                    <div class="content">

                        <p class="has-text-justified">
                            Human capital is the essential resource for today’s innovation and knowledge based economy.
                            Many organizations struggle to find and retain the highly educated and skilled workforce
                            they need to survive in a continuously growing global competition.
                        </p>

                        <p class="has-text-justified">
                            BaselHack is a platform where people from different backgrounds, expertise, topics,
                            viewpoints and organizations come together to create new concepts and build solutions. We
                            unite highly motivated people who care about their social impact and the solutions they
                            build. Become a sponsor to meet people with a diverse set of skills who can help you and
                            your organizations to thrive.
                        </p>

                    </div>


                    <h3 class="subtitle">What are your benefits?</h3>
                    <hr>

                    <div class="content">

                        <ul>

                            <li>Social Impact: From the Region, for the Region</li>
                            <li>Access to top talents in action</li>
                            <li>Positioning your brand in an innovative context</li>
                            <li>Brand visibility in extensive networks: other sponsors, partners, participants and the professional networks of 32 well connected organizers
                            </li>
                            <li>Inspiration for your employees</li>
                            <li>Experiencing an Innovation accelerator</li>

                        </ul>

                    </div>


                    <h1 style="margin-top: 50px;" class="title">Our Sponsors</h1>
<hr>


                    <div style="margin-top: 25px;" class="columns is-multiline is-centered is-vcentered is-mobile">


                        @foreach(config('baselhack.sponsors') as $sponsor)

                            <div class="column is-2-desktop is-6-mobile">

                                <div style=" border-radius: 5px;" class="card sponsors ">
                                    <div class="card-image">

                                        <figure class="image">
                                            <a target="_blank" title="{{ $sponsor['title'] }}"
                                               href="{{ $sponsor['url'] }}"><img
                                                        title="{{ $sponsor['title'] }}"
                                                        src="{{ asset('frontend/images/sponsors/' .  $sponsor['image']) }}"
                                                        alt="{{ $sponsor['title'] }}"></a>
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