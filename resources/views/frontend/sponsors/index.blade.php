@extends('frontend.layouts.app')

@section('styles')

@endsection

@section('content')

    @include('frontend.layouts.components._header')

    <section class="section">
        <div class="container">

            <div class="columns is-centered">


                <div class="column is-three-quarters">


                <h1 class="title">Sponsors</h1>

                    <h3 class="subtitle">We proudly present our sponsors!</h3>


                    <div style="margin-top: 25px;" class="columns is-multiline is-centered is-vcentered">


                        @foreach(config('baselhack.sponsors') as $sponsor)

                            <div class="column is-2-desktop ">

                                <div style=" border-radius: 5px;" class="card sponsors ">
                                    <div class="card-image">

                                        <figure class="image">
                                            <a target="_blank" title="{{ $sponsor['title'] }}"  href="{{ $sponsor['url'] }}"><img
                                                        title="{{ $sponsor['title'] }}" src="{{ asset('frontend/images/sponsors/' .  $sponsor['image']) }}"
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