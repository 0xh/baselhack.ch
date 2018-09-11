@extends('frontend.layouts.app')

@section('styles')


@endsection

@section('content')

    <section class="section hero header is-small is-light">
        <div class="hero-body">
            <div class="columns is-centered">

                <div class="column is-4">

                    <a href="{{ route('frontend.event.signup') }}">
                        <img class="image header-image" src="{{ asset('frontend/images/backgrounds/contact.png') }}">
                    </a>

                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">

            <div class="columns is-centered">

                <div class="column is-three-quarters">

                    <h1 class="title">{{ __('frontend/contact.title') }}</h1>
                    <h2 class="subtitle">{{ __('frontend/contact.subtitle') }}</h2>
                    <hr>

                    <form id="form-build" method="POST" action="{{ route('frontend.contact.store') }}">
                        @csrf

                        <div class="field">
                            <label class="label">{{ __('frontend/contact.form.input.topic') }}</label>
                            <div class="control">
                                <div class="select is-fullwidth">
                                    <select id="topic" name="topic" class=""
                                            title="{{ __('frontend/contact.form.input.topic') }}" required autofocus>
                                        <option value="" disabled
                                                selected>{{ __('frontend/contact.form.input.select.topic') }}</option>
                                        <option value="general" @if(old('topic') == 'general')selected @endif>{{ __('frontend/contact.form.input.select.general') }}</option>
                                        <option value="event" @if(old('topic') == 'event')selected @endif>{{ __('frontend/contact.form.input.select.event') }}</option>
                                        <option value="sponsoring" @if(old('topic') == 'sponsoring')selected @endif>{{ __('frontend/contact.form.input.select.sponsoring') }}</option>
                                    </select>
                                </div>
                            </div>

                            @if ($errors->has('topic'))
                                <p class="help is-danger">{{ $errors->first('topic') }}</p>
                            @endif
                        </div>

                        <div class="field">
                            <label class="label">{{ __('frontend/contact.form.input.name') }}</label>
                            <div class="control">
                                <input id="name" name="name" value="{{ old('name') }}"
                                       class="input {{ $errors->has('name') ? ' is-danger' : '' }}" type="text"
                                       placeholder="{{ __('frontend/contact.form.input.name') }}"
                                       autocomplete="name" required>
                            </div>

                            @if ($errors->has('name'))
                                <p class="help is-danger">{{ $errors->first('name') }}</p>
                            @endif
                        </div>


                        <div class="field">
                            <label class="label">{{ __('frontend/contact.form.input.email') }}</label>
                            <div class="control">
                                <input id="email" name="email" value="{{ old('email') }}"
                                       class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="email"
                                       placeholder="{{ __('frontend/contact.form.input.email') }}"
                                       autocomplete="email" required>

                                @if ($errors->has('email'))
                                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                                @endif

                            </div>
                        </div>


                        <div class="field">
                            <label class="label">{{ __('frontend/contact.form.input.message') }}</label>
                            <div class="control">
                                <textarea id="message" name="message" rows="5"
                                          class="textarea {{ $errors->has('email') ? ' is-danger' : '' }}"
                                          placeholder="{{ __('frontend/contact.form.input.message') }}"
                                          required>{{ old('email') }}</textarea>

                                @if ($errors->has('message'))
                                    <p class="help is-danger">{{ $errors->first('message') }}</p>
                                @endif

                            </div>
                        </div>


                        <div class="field {{ $errors->has('g-recaptcha-response') ? ' is-danger' : '' }}">
                            <div class="g-recaptcha" data-sitekey="6LeXkG8UAAAAANeVjDf6hPjY7KnMwyhZtKSstIUg"></div>

                            @if ($errors->has('g-recaptcha-response'))
                                <p class="help is-danger">{{ $errors->first('g-recaptcha-response') }}</p>
                            @endif


                        </div>


                        <div style="margin-top: 20px;" class="field">
                            <button type="submit"
                                    class="button is-dark is-fullwidth">{{ __('frontend/contact.form.button.submit') }}</button>
                        </div>


                    </form>

                </div>
            </div>


        </div>


    </section>

    @include('frontend.layouts.components._newsletter')


@endsection

@section('scripts')


@endsection