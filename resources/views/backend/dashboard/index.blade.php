@extends('backend.layouts.app')

@section('styles')

    <style>

        a
        {
         text-decoration: none;
        color: black;
        }
        .card-footer
        {

            background-color: white;
            font-weight: bold;
        }

        .card-footer:hover
        {

            background-color: whitesmoke;
            font-weight: bold;
        }

    </style>

@endsection
@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-4 mt-2">

            <a target="_blank" href="{{ route('members.files') }}">

            <div class="card text-center">


                <div class="card-body ">

                    <i class="fal fa-file fa-3x"></i>

                </div>

                <div class="card-footer">Files</div>

            </div>

            </a>
        </div>

        <div class="col-md-4 mt-2">

            <a target="_blank" href="{{ route('members.webmail') }}">

            <div class="card text-center">


                <div class="card-body ">

                    <i class="fal fa-envelope fa-3x"></i>

                </div>

                <div class="card-footer">Webmail</div>

            </div>

            </a>
        </div>

        <div class="col-md-4 mt-2">

            <a href="#">

                <div class="card text-center">


                    <div class="card-body ">

                        <i class="fal fa-key fa-3x"></i>

                    </div>

                    <div class="card-footer">Passwords</div>

                </div>

            </a>
        </div>


    </div>
</div>
@endsection
