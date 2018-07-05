@extends('backend.layouts.app')


@section('styles')

@endsection

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class="row">

                    <a id="link-to-participants" href="{{ route('backend.administrators.users.index') }}" class="col-md-3 text-dark">
                        <div class="card mt-3 text-center">
                            <div class="card-body">
                                <i class="fal fa-users fa-2x"></i>
                            </div>
                            <div class="card-footer">
                                Users
                            </div>
                        </div>
                    </a>


                </div>
            </div>

        </div>

    </div>

@endsection

@section('scripts')


@endsection