@extends('frontend.layouts.app')

@section('styles')


@endsection

@section('content')

    <section class="section hero header is-small is-light">
        <div class="hero-body">
            <div class="columns is-centered">

                <div class="column is-4">

                    <a href="{{ route('frontend.events.signup.index') }}">
                        <img class="image header-image" src="{{ asset('frontend/images/backgrounds/enquiries.png') }}">
                    </a>

                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">

            <div class="columns is-centered">

                <div class="column is-three-quarters">

                    <h1 class="title">{{ __('frontend/enquiries.title') }}</h1>
                    <h2 class="subtitle">{{ __('frontend/enquiries.subtitle') }}</h2>
                    <hr>

                    <form id="form-build" method="POST" action="{{ route('frontend.enquiries.store') }}">
                        @csrf

                        <div class="field">
                            <label for="type" class="label">{{ __('frontend/enquiries.form.input.type') }}</label>
                            <div class="control">
                                <div class="select is-fullwidth">
                                    <select id="type" name="type" class=""
                                            title="{{ __('frontend/enquiries.form.input.type') }}" required autofocus>
                                        <option value="" disabled
                                                selected>{{ __('frontend/enquiries.form.input.select.type') }}</option>
                                        <option value="general" @if(old('type') == 'general')selected @endif>{{ __('frontend/enquiries.form.input.select.general') }}</option>
                                        <option value="event" @if(old('type') == 'event')selected @endif>{{ __('frontend/enquiries.form.input.select.event') }}</option>
                                        <option value="sponsoring" @if(old('type') == 'sponsoring')selected @endif>{{ __('frontend/enquiries.form.input.select.sponsoring') }}</option>
                                    </select>
                                </div>
                            </div>

                            @if ($errors->has('type'))
                                <p class="help is-danger">{{ $errors->first('type') }}</p>
                            @endif
                        </div>

                        <div style="margin-top: 15px;" class="field">
                            <label for="company" class="label">{{ __('frontend/enquiries.form.input.company') }}

                                <span style="font-size: 9px;" class="tag is-dark is-pulled-right is-uppercase">optional</span>


                            </label>
                            <div class="control">
                                <input id="company" name="company" value="{{ old('company') }}"
                                       class="input {{ $errors->has('company') ? ' is-danger' : '' }}" type="text"
                                       placeholder="{{ __('frontend/enquiries.form.input.company') }}"
                                       autocomplete="company">
                            </div>

                            @if ($errors->has('company'))
                                <p class="help is-danger">{{ $errors->first('company') }}</p>
                            @endif
                        </div>


                        <div style="margin-top: 15px;" class="field">
                            <label for="name" class="label">{{ __('frontend/enquiries.form.input.name') }}</label>
                            <div class="control">
                                <input id="name" name="name" value="{{ old('name') }}"
                                       class="input {{ $errors->has('name') ? ' is-danger' : '' }}" type="text"
                                       placeholder="{{ __('frontend/enquiries.form.input.name') }}"
                                       autocomplete="name" required>
                            </div>

                            @if ($errors->has('name'))
                                <p class="help is-danger">{{ $errors->first('name') }}</p>
                            @endif
                        </div>


                        <div style="margin-top: 15px;" class="field">
                            <label for="email" class="label">{{ __('frontend/enquiries.form.input.email') }}</label>
                            <div class="control">
                                <input id="email" name="email" value="{{ old('email') }}"
                                       class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="email"
                                       placeholder="{{ __('frontend/enquiries.form.input.email') }}"
                                       autocomplete="email" required>

                                @if ($errors->has('email'))
                                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                                @endif

                            </div>
                        </div>


                        <div style="margin-top: 15px;" class="field">
                            <label for="message" class="label">{{ __('frontend/enquiries.form.input.message') }}</label>
                            <div class="control">
                                <textarea id="message" name="message" rows="5"
                                          class="textarea {{ $errors->has('email') ? ' is-danger' : '' }}"
                                          placeholder="{{ __('frontend/enquiries.form.input.message') }}"
                                          required>{{ old('message') }}</textarea>

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
                                    class="button is-dark is-fullwidth">{{ __('frontend/enquiries.form.button.submit') }}</button>
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