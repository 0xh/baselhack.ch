@extends('backend.event.layouts.default')

@section('styles')


@endsection

@section('backend.event.content')
    <div class="justify-content-center">

        <div class="card">
            <div class="card-header">Participants <span class="badge badge-secondary">{{ $participants->count() }}</span>
            </div>

            <div class="card-body">
                @if($participants->count())
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="">Status</th>
                            <th class="">Name</th>
                            <th class="">E-Mail</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($participants as $participant)
                            <tr>
                                <td> {{ $participant->status }}</td>
                                <td> {{ $participant->name }}</td>
                                <td> {{ $participant->email }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                @else
                    <p>No participants available</p>
                @endif

            </div>
        </div>
    </div>
@endsection


@section('scripts')


@endsection