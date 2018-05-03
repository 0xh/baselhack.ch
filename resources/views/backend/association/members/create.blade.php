@extends('backend.association.layouts.default')

@section('styles')



@endsection

@section('backend.association.content')
    <div class="justify-content-center">


        <div class="card ">
            <div class="card-header"><strong>Create member</strong></div>

            <div class="card-body">

                <form method="POST" class="" action="{{ route('backend.association.members.store') }}">
                    @csrf

                    <div class="form-group row">

                        <div class="col-md-6">
                            <input title="Firstname" id="firstname" placeholder="Firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>

                            @if ($errors->has('firstname'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <input title="Lastname" id="lastname" placeholder="Lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required>

                            @if ($errors->has('lastname'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                            @endif
                        </div>


                    </div>

                    <div class="form-group row">

                        <div class="col-md-12">
                            <input title="{{ __('E-Mail Address') }}" id="email" placeholder="{{ __('E-Mail Address') }}" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group row">

                        <div class="col-md-6">
                            <input title="Mobile" id="mobile" placeholder="Mobile" type="text" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile') }}">

                            @if ($errors->has('mobile'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <input title="Github" id="github" placeholder="Github" type="text" class="form-control{{ $errors->has('github') ? ' is-invalid' : '' }}" name="github" value="{{ old('github') }}">

                            @if ($errors->has('github'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('github') }}</strong>
                                    </span>
                            @endif
                        </div>


                    </div>


                    <div class="form-group row">

                        <div class="col-md-6">
                            <input title="Birthdate" id="birthdate" placeholder="Birthdate" type="date" class="form-control{{ $errors->has('birthdate') ? ' is-invalid' : '' }}" name="birthdate" value="{{ old('birthdate') }}">

                            @if ($errors->has('birthdate'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <input title="Member Since" id="member_since" placeholder="Member Since" type="date" class="form-control{{ $errors->has('member_since') ? ' is-invalid' : '' }}" name="member_since" value="{{ old('member_since') }}">

                            @if ($errors->has('member_since'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('member_since') }}</strong>
                                    </span>
                            @endif
                        </div>


                    </div>



                    <div class="form-group row mb-0">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-block btn-primary">
                                Create member
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