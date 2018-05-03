@extends('backend.events.layouts.default')

@section('styles')



@endsection

@section('backend.events.content')
    <div class="justify-content-center">

        <div class="card">
            <div class="card-header">Newsletters <span class="badge badge-secondary">{{ $newsletters->count() }}</span>
            </div>


            <div class="card-body">
                @if($newsletters->count())
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="">E-Mail</th>
                            <th>Subscribed since</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($newsletters as $newsletter)
                            <tr>
                                <td><a target="_blank"
                                       href="mailto:{{ $newsletter->email }}">{{ $newsletter->email }}</a></td>
                                <td>{{ optional($newsletter->created_at)->diffForHumans() }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                @else
                    <p>No subscribers available</p>
                @endif


            </div>

        </div>


    </div>
@endsection


@section('scripts')



@endsection