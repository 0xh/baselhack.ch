@extends('frontend.layouts.app')

@section('styles')


@endsection

@section('content')

    @include('frontend.layouts.components._header')

    <section class="section">
        <div class="container">

            <div class="columns is-centered">

                <div class="column is-three-fifths">

                    <h2 class="subtitle">{{ __('frontend/contact.subtitle') }}</h2>
                    <hr>

                    <p class="has-text-justified">

                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet. Lorem ipsum dolor sit amet, consetetur

                    </p>

                    <hr>


                    <form id="form-build" method="POST" action="{{ route('frontend.contact.store') }}">
                        @csrf

                        <div class="field">
                            <label class="label">{{ __('frontend/contact.form.input.name') }}</label>
                            <div class="control">
                                <input id="name" name="name" value="{{ old('name') }}"
                                       class="input {{ $errors->has('name') ? ' is-danger' : '' }}" type="text"
                                       placeholder="{{ __('frontend/contact.form.input.name') }}"
                                       autocomplete="name" required autofocus>
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