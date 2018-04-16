@extends('backend.administrators.layouts.default')

@section('styles')



@endsection

@section('backend.administrators.content')
    <div class="justify-content-center">

        <div class="card ">
            <div class="card-header">

                @if($user->activated)
                    <img class="mr-2" src="{{ asset('backend/images/status/status_activated.png') }}">
                @else
                    <img class="mr-2" src="{{ asset('backend/images/status/status_deactivated.png') }}">
                @endif

                <strong>{{ $user->name }}</strong> - <span>{{ $user->email }}</span>


                <div class="float-right">

                   <i data-toggle="tooltip" data-placement="top" title="{{ $user->language }}"class="fal fa-globe"></i>

                </div>
            </div>

            @if($user->customer_id and $user->activated)
            <div class="card-body">


                <div class="form-group row">


                    <div class="col-md-12">

                        <label for="customer_id">Auth Link</label>


                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fal fa-link"></i></span>
                            </div>
                            <input type="text" class="form-control" id="auth_link" name="auth_link" placeholder="Auth Link"
                                   value="{{ $user->authLink() }}" disabled>
                        </div>



                    </div>

                </div>


                {{--
                  <form method="POST" action="{{ route('backend.administrators.users.update', $user) }}">
                                    @csrf


                                     <div class="form-group row">

                                        <div class="col-md-12">
                                            <label for="customer_id">Customer ID</label>
                                            <input id="customer_id" placeholder="Customer ID" type="text" class="form-control{{ $errors->has('customer_id') ? ' is-invalid' : '' }}" name="customer_id" value="{{ old('customer_id', $user->customer_id) }}" disabled>

                                            @if ($errors->has('customer_id'))
                                                <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('customer_id') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group row">

                                        <div class="col-md-12">
                                            <label for="name">Name</label>
                                            <input title="Name" id="name" placeholder="Name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', $user->name) }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-md-12">
                                            <label for="email">E-Mail Address</label>

                                            <input title="{{ __('E-Mail Address') }}" id="email" placeholder="{{ __('E-Mail Address') }}" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email', $user->email) }}" required>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group row mb-0">
                                        <div class="col-md-12 text-center">
                                            <button dusk="create-user-button" type="submit" class="btn btn-block btn-dark">
                                                Update user
                                            </button>

                                        </div>
                                    </div>
                                      </form>--}}


            </div>
            @endif
        </div>

            <div class="card mt-4">
                <div class="card-header">
                    <strong>Roles</strong>

                <div class="float-right">

                    <a href="" data-toggle="modal" data-target="#addRole" class=""><i class="fal fa-plus-circle"></i> Add a role</a>

                </div>

                </div>

                @if($user->roles->count())

                <div class="card-body">

                    @foreach($user->roles as $role)

                        <button class="btn btn-light">

                            {{ $role->title }}
                        </button>

                    @endforeach

                </div>
                @endif

                <!-- Add a role - Modal -->
                <div class="modal fade" id="addRole" tabindex="-1" role="dialog" aria-labelledby="addRole" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add a role</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">


                                <form method="POST" action="{{ route('backend.administrators.users.add.role', $user) }}">
                                    @csrf

                                    {{ method_field('PATCH') }}


                                    <div class="form-group row">

                                    <div class="col-md-12">
                                        <select title="Role" id="role_id"
                                                class="form-control{{ $errors->has('role_id') ? ' is-invalid' : '' }}"
                                                name="role_id" required
                                        >

                                            <option value="" selected disabled>Please select a role</option>
                                          @foreach($roles as $role)
                                              <option value="{{$role->id}}">{{ $role->title }}</option>
                                          @endforeach

                                        </select>
                                        @if ($errors->has('role_id'))
                                            <div class="invalid-feedback">
                                                <strong>{{ $errors->first('role_id') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-12 text-center">
                                            <button dusk="add-a-role-button" type="submit" class="btn btn-block btn-dark">
                                                Add role
                                            </button>

                                        </div>
                                    </div>

                                </form>


                            </div>
                        </div>
                    </div>
                </div>

            </div>


        <div class="card mt-4">
            <div class="card-header"><strong>Settings</strong></div>

            <div class="card-body">


            {{--    @if($user->activated)
                <div class="form-group row mb-3">
                    <div class="col-md-12 text-center">
                        <button dusk="archive-user-button" type="submit" class="btn btn-block btn-light">
                            <i class="fal fa-envelope-open mr-1"></i> Send new password to user
                        </button>

                    </div>
                </div>
                @endif
--}}

                @if($user->activated)
                    <form method="POST" action="{{ route('backend.administrators.users.deactivate', $user) }}">
                        @csrf

                        {{ method_field('PATCH') }}

                        <div class="form-group row mb-3">
                            <div class="col-md-12 text-center">
                                <button dusk="archive-user-button" type="submit" class="btn btn-block btn-light">
                                    <i class="fal fa-times-circle mr-1"></i> Deactivate user
                                </button>

                            </div>
                        </div>
                    </form>
                @else

                    <form method="POST" action="{{ route('backend.administrators.users.activate', $user) }}">
                        @csrf

                        {{ method_field('PATCH') }}

                        <div class="form-group row mb-3">
                            <div class="col-md-12 text-center">
                                <button dusk="archive-user-button" type="submit" class="btn btn-block btn-light">
                                    <i class="fal fa-check-circle mr-1"></i> Activate user
                                </button>

                            </div>
                        </div>
                    </form>

                @endif




                    <div class="form-group row mb-3">
                        <div class="col-md-12 text-center">


                            <a class="btn btn-block btn-light" href="" data-toggle="modal" data-target="#confirmArchive" class=""><i class="fal fa-trash mr-1"></i> Archive user</a>

                        </div>
                    </div>


                    <!-- Confirm archivation - Modal -->
                    <div class="modal fade" id="confirmArchive" tabindex="-1" role="dialog" aria-labelledby="confirmArchive" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Archive user</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">


                                    <form method="POST" action="{{ route('backend.administrators.users.delete', $user) }}">
                                        @csrf

                                        {{ method_field('DELETE') }}
                                        <div class="form-group row mb-0">
                                            <div class="col-md-12 text-center">
                                                <button dusk="archive-user-button" type="submit" class="btn btn-block btn-danger">
                                                    Archive user
                                                </button>

                                            </div>
                                        </div>

                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>


            </div>
        </div>


        @if($user->last_activity)
            <div class="card mt-4">
                <div class="card-header"><strong>Last activity</strong></div>

                <div class="card-body">


                    {{ $user->last_activity->diffForHumans() }}

                </div>
            </div>
        @endif


    </div>
@endsection


@section('scripts')

    <script>

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>



@endsection