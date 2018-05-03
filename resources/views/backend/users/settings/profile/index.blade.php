@extends('backend.users.settings.layouts.default')

@section('styles')


@endsection

@section('backend.users.settings.content')
    <div class="justify-content-center">

        <div class="card">
            <div class="card-header"><strong>Profile</strong></div>

            <div class="card-body">

                <form class="form-horizontal" method="POST" action="{{ route('backend.users.settings.profile.update', $user) }}">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="form-group row">



                        <div class="col-md-12">

                            <label for="customer_id">Name</label>


                            <input  title="Name"
                                    type="text"
                                    id="name"
                                    placeholder="Ihre Name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    name="name"
                                    value="{{ old('name', $user->name) }}"
                                    required autofocus
                            >
                            @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-md-12">
                            <label for="customer_id">E-Mail</label>

                            <input title="E-Mail"
                                   id="email"
                                   type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   name="email"
                                   value="{{ old('email', $user->email) }}"
                                   required
                            >

                            @if ($errors->has('email'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>



                    <div class="form-group row">
                        <div class="col-md-12 text-center">
                            <button  type="submit" class="btn btn-block btn-primary">
                                Update profile
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

