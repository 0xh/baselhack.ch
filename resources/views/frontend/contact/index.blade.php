@extends('frontend.layouts.app')

@section('styles')


@endsection

@section('content')

    @include('frontend.layouts.components._header')

    <section class="section">
        <div class="container">

            <div class="columns is-centered">


                <div class="column is-three-quarters">

                <h1 class="title">{{ __('frontend/contact.title') }}</h1>
                    <h2 class="subtitle"> {{ __('frontend/contact.subtitle') }}</h2>
                    <hr>



                    <form id="form-build" method="POST" action="{{ route('frontend.contact.store') }}">
                        @csrf


                        <div class="field">
                            <label class="label">{{ __('frontend/contact.form.input.topic') }}</label>
                            <div class="control">
                                <div class="select is-fullwidth">
                                    <select id="topic" name="topic" class="" title="{{ __('frontend/contact.form.input.topic') }}" required autofocus>
                                        <option disabled selected>{{ __('frontend/contact.form.input.select.topic') }}</option>
                                        <option value="general">{{ __('frontend/contact.form.input.select.general') }}</option>
                                        <option value="event">{{ __('frontend/contact.form.input.select.event') }}</option>
                                        <option value="sponsoring">{{ __('frontend/contact.form.input.select.sponsoring') }}</option>
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