@extends('backend.event.layouts.default')

@section('styles')


@endsection

@section('backend.event.content')
    <div class="justify-content-center">

        <div class="card">
            <div class="card-header">Subscribers <span class="badge badge-secondary">{{ $subscribers->count() }}</span>
            </div>


            <div class="card-body">
                @if($subscribers->count())
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="">E-Mail</th>
                            <th>Subscribed since</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($subscribers as $subscriber)
                            <tr>
                                <td><a target="_blank"
                                       href="mailto:{{ $subscriber->email }}">{{ $subscriber->email }}</a></td>
                                <td>{{ optional($subscriber->created_at)->diffForHumans() }}</td>
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