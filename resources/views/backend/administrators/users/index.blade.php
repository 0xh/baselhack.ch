@extends('backend.administrators.layouts.default')

@section('styles')



@endsection

@section('backend.administrators.content')
    <div class="justify-content-center">


        <div class="card ">
            <div class="card-header"><strong>Users</strong></div>

            <div class="card-body">

                <table id="" class="table table-striped ">
                    <thead>
                    <tr>
                        <th class="text-center">Status</th>
                        <th>Name</th>
                        <th>E-Mail Address</th>
                        <th>Last activity</th>
                        {{--
                                                <th></th>
                        --}}
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($users as $user)
                        <tr>
                            <td class="text-center">
                                @if($user->activated)
                                    <img class="" src="{{ asset('backend/images/status/status_activated.png') }}">
                                @else
                                    <img class="" src="{{ asset('backend/images/status/status_deactivated.png') }}">
                                @endif
                            </td>
                            <td><a href="{{ route('backend.administrators.users.edit', $user) }}">{{ $user->name }}</a></td>
                            <td>{{ $user->email }}</td>
                            <td>{{ optional($user->last_authentication)->diffForHumans() }}</td>
                            {{--
                                                        <td><a href="{{ route('backend.administrators.users.edit', $user) }}"><i class="fal fa-pen"></i></a></td>
                            --}}
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