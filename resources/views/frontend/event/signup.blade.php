@extends('frontend.layouts.app')

@section('styles')

@endsection

@section('content')

    <section class="section hero header is-small is-light">
        <div class="hero-body">
            <div class="columns is-centered">
                <div class="column is-3">
                    <figure class="image">
                        <img  class="" alt="" src="{{ asset('frontend/images/backgrounds/event.png') }}">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">

            <div class="columns is-centered">


                <div class="column is-three-quarters">

                    <h1 class="title">Sign-Up now!</h1>
                    <h2 class="subtitle">24th & 25th November 2018</h2>
                    <hr>




                    <form id="form-build" method="POST" action="{{ route('frontend.event.signup.store') }}">
                        @csrf

                        <div class="field">
                            <label class="label">{{ __('frontend/event.signup.form.input.firstname') }}</label>
                            <div class="control">
                                <input id="firstname" name="firstname" value="{{ old('firstname') }}"
                                       class="input {{ $errors->has('firstname') ? ' is-danger' : '' }}" type="text"
                                       placeholder="{{ __('frontend/event.signup.form.input.firstname') }}"
                                       autocomplete="firstname" required>
                            </div>

                            @if ($errors->has('firstname'))
                                <p class="help is-danger">{{ $errors->first('firstname') }}</p>
                            @endif
                        </div>


                        <div class="field">
                            <label class="label">{{ __('frontend/event.signup.form.input.lastname') }}</label>
                            <div class="control">
                                <input id="lastname" name="lastname" value="{{ old('lastname') }}"
                                       class="input {{ $errors->has('lastname') ? ' is-danger' : '' }}" type="text"
                                       placeholder="{{ __('frontend/event.signup.form.input.lastname') }}"
                                       autocomplete="lastname" required>
                            </div>

                            @if ($errors->has('lastname'))
                                <p class="help is-danger">{{ $errors->first('lastname') }}</p>
                            @endif
                        </div>

                        <div class="field">
                            <label class="label">{{ __('frontend/event.signup.form.input.company') }}</label>
                            <div class="control">
                                <input id="company" name="company" value="{{ old('company') }}"
                                       class="input {{ $errors->has('company') ? ' is-danger' : '' }}" type="text"
                                       placeholder="{{ __('frontend/event.signup.form.input.company') }}"
                                       autocomplete="company">
                            </div>

                            @if ($errors->has('company'))
                                <p class="help is-danger">{{ $errors->first('company') }}</p>
                            @endif
                        </div>


                        <div class="field">
                            <label class="label">{{ __('frontend/event.signup.form.input.email') }}</label>
                            <div class="control">
                                <input id="email" name="email" value="{{ old('email') }}"
                                       class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="email"
                                       placeholder="{{ __('frontend/event.signup.form.input.email') }}"
                                       autocomplete="email">
                            </div>

                            @if ($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>


                        <hr>


                        <div class="content">
                            <p>Participation is limited to <b>100 Hackers.</b> Anyone can take part. Minors will only be allowed entry if accompanied by a parent who also registers. Team participation is possible, although not a requirement, as teams will be formed on site. Every person in a team must register individually.</p>

                        </div>

                        <hr>


                        <div class="columns is-centered is-mobile">



                            <div class="column is-5">

                                <div class="field">
                                    <label style="margin-top: 20px;" class="checkbox">
                                        <input id="privacy" name="privacy" type="checkbox" required>
                                        {{ __('frontend/event.signup.form.input.accept_policty_start') }} <a target="_blank"
                                                                                                             href="{{ route('frontend.legal.privacy.index') }}">{{ __('frontend/event.signup.form.input.privacy') }}</a>  {{ __('frontend/event.signup.form.input.accept_policty_stop') }}.
                                    </label>


                                    @if ($errors->has('privacy'))
                                        <p class="help is-danger">{{ $errors->first('privacy') }}</p>
                                    @endif

                                </div>


                            </div>


                            <div class="column is-5">
                                <div class="field">
                                    <label style="margin-top: 20px;" class="checkbox">
                                        <input id="over_eighteen" value="1" name="over_eighteen" type="checkbox" required>
                                        {{ __('frontend/event.signup.form.input.over_eighteen') }}
                                    </label>


                                    @if ($errors->has('over_eighteen'))
                                        <p class="help is-danger">{{ $errors->first('over_eighteen') }}</p>
                                    @endif




                                </div>


                            </div>




                        </div>






                        <div style="margin-top: 30px;" class="field">
                            <button type="submit"
                                    class="button is-dark is-fullwidth">{{ __('frontend/event.signup.form.button.submit') }}</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>

    </section>

@endsection

@section('scripts')


@endsection