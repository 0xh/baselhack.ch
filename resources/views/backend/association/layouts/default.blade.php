@extends('backend.layouts.app')


@section('content')

    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-3 mt-3">

                 @include('backend.association.layouts.partials._navigation')

             </div>

            <div class="col-sm-12 col-md-9 mt-3">

                @yield('backend.association.content')

            </div>

        </div>

    </div>

@endsection


