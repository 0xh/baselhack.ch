@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">


        @role('member')
        <a id="link-to-association" style="color: black; text-decoration: none;" href="{{ route('backend.association.dashboard.index') }}" class="col-md-3">
            <div class="card mt-3 text-center">
                <div class="card-body">
                    <img height="30;" src="{{ asset('backend/images/baselhack_logo.png') }}">
                </div>
                <div class="card-footer">
                    BaselHack
                </div>
            </div>
        </a>
        @endrole

        @role('events')
        <a id="link-to-association" style="color: black; text-decoration: none;" href="{{ route('backend.events.dashboard.index') }}" class="col-md-3">
            <div class="card mt-3 text-center">
                <div class="card-body">
                    <i class="fal fa-calendar-alt fa-2x"></i>
                </div>
                <div class="card-footer">
                    Events
                </div>
            </div>
        </a>
        @endrole



        @role('administrator')
        <a id="link-to-administrator" style="color: black; text-decoration: none;" href="{{ route('backend.administrators.users.index') }}" class="col-md-3">
            <div class="card mt-3 text-center">
                <div class="card-body">
                    <i class="fal fa-unlock-alt fa-2x"></i>
                </div>
                <div class="card-footer">
                    Administrator
                </div>
            </div>
        </a>
        @endrole


    </div>
</div>
@endsection
