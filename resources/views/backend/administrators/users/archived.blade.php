@extends('backend.administrators.layouts.default')

@section('styles')



@endsection

@section('backend.administrators.content')
    <div class="justify-content-center">


        <div class="card ">
            <div class="card-header"><strong>Archived user</strong>

                <div class="float-right">

                    <a href="{{ route('backend.administrators.users.index') }}"><i style="color: black;"
                                                                                   class="fal fa-users mr-2"></i></a>

                </div>

            </div>

            <div class="card-body">
                @if($users->count())
                    <table id="" class="table table-striped ">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>E-Mail Address</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>

                                    <form method="POST" class=""
                                          action="{{ route('backend.administrators.users.restore', $user->email) }}">
                                        @csrf

                                        {{ method_field('PATCH') }}

                                        <button style="padding: 0px;" dusk="restore-archived-user-button" type="submit"
                                                class="btn btn-link">
                                            Restore
                                        </button>
                                    </form>


                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                @else
                    <p>No archived user available</p>
                @endif

            </div>

        </div>
    </div>
@endsection


@section('scripts')



@endsection