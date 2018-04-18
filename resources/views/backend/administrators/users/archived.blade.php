@extends('backend.administrators.layouts.default')

@section('styles')



@endsection

@section('backend.administrators.content')
    <div class="justify-content-center">


        <div class="card ">
            <div class="card-header"><strong>Archived user</strong></div>

            <div class="card-body">

                <table id="" class="table table-striped ">
                    <thead>
                    <tr>
                        <th>Status</th>
                        <th>Name</th>
                        <th>E-Mail Address</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($users as $user)
                        <tr>
                            <td>
                                @if($user->activated)
                                    <img class="" src="{{ asset('backend/images/status/status_activated.png') }}">
                                @else
                                    <img class="" src="{{ asset('backend/images/status/status_deactivated.png') }}">
                                @endif
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>

                                <form method="POST" class="" action="{{ route('backend.administrators.users.restore', $user->email) }}">
                                    @csrf

                                    {{ method_field('PATCH') }}

                                            <button style="padding: 0px;" dusk="restore-archived-user-button" type="submit" class="btn btn-link">
                                                Restore
                                            </button>
                                </form>


                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>


            </div>
        </div>
    </div>
@endsection


@section('scripts')



@endsection