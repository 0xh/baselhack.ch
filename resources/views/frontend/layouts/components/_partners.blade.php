<section class="section is-hidden-mobile">
    <div class="container">

        <div class="columns is-centered">

            <div class="column is-three-quarters">


                <h1 class="title">Partners</h1>

                <h3 class="subtitle">We proudly present our partners!</h3>

                <div style="margin-top: 25px;" class="columns is-multiline is-centered is-vcentered">


                    @foreach(config('baselhack.partners') as $partner)

                        <div class="column is-2-desktop">

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