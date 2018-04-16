@extends('backend.users.settings.layouts.default')

@section('styles')


@endsection

@section('backend.users.settings.content')
    <div class="justify-content-center">

        <div class="card">

            <div class="card-header"><strong>Security</strong></div>

            <div class="card-body">

                <form class="form-horizontal" method="POST"
                      action="{{ route('backend.users.settings.security.update', $user) }}">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}


                    <div class="form-group row">

                        <div class="col-md-12">

                            <label for="customer_id">Password</label>


                            <input id="password"
                                   type="password"
                                   placeholder="Password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   name="password"
                                   required autofocus
                            >
                            @if ($errors->has('password'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-md-12">

                            <label for="customer_id">Password confirmation</label>

                            <input id="password_confirmation"
                                   type="password"
                                   placeholder="Password confirmation"
                                   class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                   name="password_confirmation"
                                   required
                            >
                            @if ($errors->has('password_confirmation'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-md-12 text-center">
                            <button dusk="update-password-button" type="submit"
                                    class="btn btn-block btn-primary">
                                Update password
                            </button>


                        </div>
                    </div>


                </form>


            </div>
        </div>
    </div>

@endsection


@section('scripts')



@endsection
