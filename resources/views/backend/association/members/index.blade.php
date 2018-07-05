@extends('backend.association.layouts.default')

@section('styles')

    <style>



    </style>

@endsection

@section('backend.association.content')


    <div class="justify-content-center">

        <div class="card">
            <div class="card-header">Members <span class="badge badge-secondary">{{ $members->count() }}</span>

                <div class="float-right">


                </div>

                <div class="float-right">

                    <a href="{{ route('backend.association.members.index') }}" class="btn btn-sm btn-dark ml-2">Index <i class="fal fa-list-ul ml-1"></i></a>
                    <a href="{{ route('backend.association.members.export') }}" class="btn btn-sm btn-dark ml-2">Export <i class="fal fa-file-excel ml-1"></i></a>
                    <a href="{{ route('backend.association.members.create') }}" class="btn btn-sm btn-dark ml-2">Create <i class="fal fa-plus-circle ml-1"></i></a>


                </div>



            </div>

            <div class="card-body">

                <table class="table table-striped">
                    <thead>
                    <tr>

                        <th >Name</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($members as $member)
                        <tr>
                            <td><a href="{{ route('backend.association.members.edit', $member) }}">{{ $member->name }}</a></td>
                            <td>{{ $member->status }}</td>
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