<h1 class="title">At the moment we're fully booked =(</h1>
<h2 class="subtitle">Sign-Up for our waiting list. First come first serve!</h2>


<hr>

<form id="form-build" method="POST" action="{{ route('frontend.events.signup.skip') }}">
    @csrf

    <div class="field">
        <label class="label">{{ __('frontend/event.signup.form.input.email') }}


        </label>
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
        <button type="submit"
                class="button is-dark is-fullwidth">{{ __('frontend/event.signup.form.button.submit') }}</button>
    </div>


</form>