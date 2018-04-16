@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <a id="link-to-settings" style="color: black; text-decoration: none;" href="{{ route('backend.association.members.index') }}" class="col-md-3">
            <div class="card mt-3 text-center">
                <div class="card-body">
                    <i class="fal fa-users fa-2x"></i>                </div>
                <div class="card-footer">
                    Members
                </div>
            </div>
        </a>



   {{--     <a id="link-to-settings" style="color: black; text-decoration: none;" href="{{ route('backend.association.passwords.index') }}" class="col-md-3">
            <div class="card mt-3 text-center">
                <div class="card-body">
                    <i class="fal fa-sign-out fa-2x"></i>
                </div>
                <div class="card-footer">
                    Passwords
                </div>
            </div>
        </a>
--}}


    </div>
</div>
@endsection
