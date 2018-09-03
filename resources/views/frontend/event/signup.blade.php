@extends('frontend.layouts.app')

@section('styles')

@endsection

@section('content')

    @include('frontend.layouts.components._header')

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
                            <label class="label">{{ __('frontend/event.signup.form.input.type') }}</label>
                            <div class="control">
                                <div class="select is-fullwidth">
                                    <select id="type" name="type" class=""
                                            title="{{ __('frontend/event.signup.form.input.type') }}" required
                                            autofocus>
                                        <option value="" disabled
                                                selected>{{ __('frontend/event.signup.form.input.select.type') }}</option>
                                        <option value="participant">{{ __('frontend/event.signup.form.input.select.participant') }}</option>
                                        <option value="sponsor">{{ __('frontend/event.signup.form.input.select.sponsor') }}</option>
                                        <option value="visitor">{{ __('frontend/event.signup.form.input.select.visitor') }}</option>
                                    </select>
                                </div>
                            </div>

                            @if ($errors->has('type'))
                                <p class="help is-danger">{{ $errors->first('type') }}</p>
                            @endif
                        </div>

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


                        <div class="field">
                            <label style="margin-top: 20px;" class="checkbox">
                                <input id="over_eighteen" value="1" name="over_eighteen" type="checkbox">
                                {{ __('frontend/event.signup.form.input.over_eighteen') }}
                            </label>


                            @if ($errors->has('over_eighteen'))
                                <p class="help is-danger">{{ $errors->first('over_eighteen') }}</p>
                            @endif

                        </div>

                        <div class="field">
                            <label style="margin-top: 20px;" class="checkbox">
                                <input id="privacy" name="privacy" type="checkbox" required>
                                {{ __('frontend/event.signup.form.input.accept_policty') }} <a target="_blank"
                                                                                     href="{{ route('frontend.legal.privacy.index') }}">{{ __('frontend/event.signup.form.input.privacy') }}</a>.
                            </label>


                            @if ($errors->has('privacy'))
                                <p class="help is-danger">{{ $errors->first('privacy') }}</p>
                            @endif

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