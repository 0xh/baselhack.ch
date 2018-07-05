@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">



        <a id="link-to-association" style="color: black; text-decoration: none;" href="{{ route('backend.association.dashboard.index') }}" class="col-md-3">
            <div class="card mt-3 text-center">
                <div class="card-body">
                    <i class="fal fa-cube fa-2x"></i>
                </div>
                <div class="card-footer">
                    Association
                </div>
            </div>
        </a>

        <a id="link-to-association" style="color: black; text-decoration: none;" href="{{ route('backend.event.dashboard.index') }}" class="col-md-3">
            <div class="card mt-3 text-center">
                <div class="card-body">
                    <i class="fal fa-calendar-alt fa-2x"></i>
                </div>
                <div class="card-footer">
                    Event 2018
                </div>
            </div>
        </a>




        <a id="link-to-administrator" style="color: black; text-decoration: none;" href="{{ route('backend.administrators.dashboard.index') }}" class="col-md-3">
            <div class="card mt-3 text-center">
                <div class="card-body">
                    <i class="fal fa-unlock-alt fa-2x"></i>
                </div>
                <div class="card-footer">
                    Administrator
                </div>
            </div>
        </a>


    </div>
</div>
@endsection
