@extends('backend.layouts.app')


@section('content')

    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-3 mt-3">

                 @include('backend.events.layouts.partials._navigation')

             </div>

            <div class="col-sm-12 col-md-9 mt-3">

                @yield('backend.events.content')

            </div>

        </div>

    </div>

@endsection


