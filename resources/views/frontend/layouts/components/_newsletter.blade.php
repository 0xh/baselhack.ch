<section class="section hero is-light">
    <div class="container">

        <div class="columns is-centered">

            <div class="column is-three-quarters">

                <div class="columns is-centered is-vcentered">

                <div class="column is-6">

                    <h1 class="title is-uppercase">{{ __('frontend/components/newsletter.title') }}</h1>
                    <p class="subtitle is-6">{{ __('frontend/components/newsletter.subtitle') }}</p>


                </div>



                <div class="column is-6">

                    <form action="{{ route('frontend.newsletter.store') }}" method="POST">
                        {{ csrf_field() }}

                        <div>
                            <div class="field is-grouped">
                                <div class="control is-expanded">
                                    <input id="email" value="{{ old('email') }}" name="email"
                                           class="input is-flat required email"
                                           placeholder="{{ __('frontend/components/newsletter.form.input.email') }}"
                                           aria-required="true"
                                           type="email" required>
                                </div>
                                <div class="control">
                                    <input title="{{ __('frontend/components/newsletter.form.button.subscribe') }}" value="{{ __('frontend/components/newsletter.form.button.subscribe') }}" name="subscribe"
                                           class="button is-dark" type="submit">
                                </div>
                            </div>

                        </div>
                    </form>


                </div>


                </div>




            </div>

        </div>

    </div>
</section>


