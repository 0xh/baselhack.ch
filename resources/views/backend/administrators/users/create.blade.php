@extends('backend.administrators.layouts.default')

@section('styles')



@endsection

@section('backend.administrators.content')
    <div class="justify-content-center">


        <div class="card ">
            <div class="card-header"><strong>Create user</strong>


                <div class="float-right">

                    <a href="{{ route('backend.administrators.users.index') }}" class="btn btn-sm btn-dark ml-2">Index <i class="fal fa-list-ul ml-1"></i></a>
                    <a href="{{ route('backend.administrators.users.create') }}" class="btn btn-sm btn-dark ml-2">Create <i class="fal fa-plus-circle ml-1"></i></a>

                </div>

            </div>

            <div class="card-body">

                <form method="POST" class="" action="{{ route('backend.administrators.users.create') }}">
                    @csrf


                    <div class="form-group row">

                        <div class="col-md-12">
                            <input title="Name" id="name" placeholder="Name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
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


                    <div class="form-group row mb-0">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-block btn-dark">
                                Create user
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