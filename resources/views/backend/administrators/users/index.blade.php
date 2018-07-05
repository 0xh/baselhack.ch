@extends('backend.administrators.layouts.default')

@section('styles')



@endsection

@section('backend.administrators.content')
    <div class="justify-content-center">

        <div class="card">
            <div class="card-header"><strong>Users</strong>


                <div class="float-right">

                    <a href="{{ route('backend.administrators.users.index') }}" class="btn btn-sm btn-dark ml-2">Index <i class="fal fa-list-ul ml-1"></i></a>
                    <a href="{{ route('backend.administrators.users.create') }}" class="btn btn-sm btn-dark ml-2">Create <i class="fal fa-plus-circle ml-1"></i></a>

                </div>

            </div>

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
                                @if($user->published_at)
                                    <img class="" src="{{ asset('backend/images/status/status_activated.png') }}">
                                @else
                                    <img class="" src="{{ asset('backend/images/status/status_deactivated.png') }}">
                                @endif
                            </td>
                            <td>{{ $user->name }}</td>
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