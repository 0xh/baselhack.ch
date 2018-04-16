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


        <a id="link-to-settings" style="color: black; text-decoration: none;" href="{{ route('backend.users.settings.profile.index') }}" class="col-md-3">
            <div class="card mt-3 text-center">
                <div class="card-body">
                    <i class="fal fa-wrench fa-2x"></i>
                </div>
                <div class="card-footer">
                    Settings
                </div>
            </div>
        </a>



        <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" dusk="logout" style="color: black; text-decoration: none;" class="col-md-3">
            <div class="card mt-3 text-center">
                <div class="card-body">
                    <i class="fal fa-sign-out fa-2x"></i>
                </div>
                <div class="card-footer">
                    Logout
                </div>
            </div>


            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </a>



    </div>
</div>
@endsection
