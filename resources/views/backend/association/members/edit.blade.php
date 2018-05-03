@extends('backend.association.layouts.default')

@section('styles')



@endsection

@section('backend.association.content')
    <div class="justify-content-center">


        <div class="card ">
            <div class="card-header"><strong>Edit {{ $member->name }}</strong></div>

            <div class="card-body">

                <form method="POST" class="" action="{{ route('backend.association.members.update', $member) }}">
                    @csrf
                    {{ method_field('PATCH') }}

                    <div class="form-group row">

                        <div class="col-md-12">
                            <lable for="status">Status</lable>

                            <select title="Status" id="status" name="status" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" required>
                                @foreach(config('app.member_status') as $status)
                                    <option value="{{ $status }}" @if($status === $member->status) selected @endif>{{ $status }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('status'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>



                    <div class="form-group row">


                        <div class="col-md-6">
                            <label for="firstname">Firstname</label>
                            <input id="firstname" placeholder="Firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname', $member->firstname) }}" required autofocus>

                            @if ($errors->has('firstname'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label for="lastname">Lastname</label>
                            <input id="lastname" placeholder="Lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname',  $member->lastname) }}" required>

                            @if ($errors->has('lastname'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                            @endif
                        </div>


                    </div>

                    <div class="form-group row">

                        <div class="col-md-12">
                            <lable for="email">E-Mail Address</lable>
                            <input id="email" placeholder="{{ __('E-Mail Address') }}" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email',  $member->email) }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group row">

                        <div class="col-md-6">
                            <label for="mobile">Mobile</label>
                            <input id="mobile" placeholder="Mobile" type="text" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile' ,$member->mobile) }}">

                            @if ($errors->has('mobile'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <lable for="Github">Github</lable>
                            <input id="github" placeholder="Github" type="text" class="form-control{{ $errors->has('github') ? ' is-invalid' : '' }}" name="github" value="{{ old('github',  $member->github) }}">

                            @if ($errors->has('github'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('github') }}</strong>
                                    </span>
                            @endif
                        </div>


                    </div>


                    <div class="form-group row">

                        <div class="col-md-6">
                            <label for="birthdate">Birthdate</label>
                            <input id="birthdate" placeholder="Birthdate" type="date" class="form-control{{ $errors->has('birthdate') ? ' is-invalid' : '' }}" name="birthdate" value="{{ old('birthdate',  $member->birthdate) }}">

                            @if ($errors->has('birthdate'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <lable for="member_since">Member Since</lable>
                            <input id="member_since" placeholder="Member Since" type="date" class="form-control{{ $errors->has('member_since') ? ' is-invalid' : '' }}" name="member_since" value="{{ old('member_since',  $member->member_since) }}">

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
                                Update
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