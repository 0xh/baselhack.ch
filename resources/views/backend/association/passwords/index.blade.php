@extends('backend.association.layouts.default')

@section('styles')



@endsection

@section('backend.association.content')
    <div class="justify-content-center">

        <div class="card">
            <div class="card-header">Passwords <span class="badge badge-secondary">{{ $passwords->count() }}</span>



            </div>

            <div class="card-body">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Service</th>
                        <th class="">Link</th>
                        <th>Username</th>
                        <th>E-Mail</th>
                        <th>Password</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($passwords as $password)
                        <tr>

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