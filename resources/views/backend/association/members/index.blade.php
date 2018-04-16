@extends('backend.layouts.app')

@section('styles')

<style>

    .btn-excel
    {
        background-color: #247549;
        border-color: #247549;
    }

    .btn-excel:hover
    {
        background-color: #2ca56f;
        border-color: #2ca56f;
    }


    .table th {
        text-align: center;
    }


    .table td {
        text-align: center;
    }

</style>
@endsection
@section('content')
<div class="container">
    <div class="row">


        <div class="col-md-12">

            <div class="float-right">

{{--
                <a href="{{ route('backend.association.members.create') }}" class="btn btn-primary">Create a member</a>
--}}
                <a href="{{ route('backend.association.members.export') }}" class="btn btn-primary btn-excel ml-2">Export to .xls</a>


            </div>




        </div>
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">Members <span class="badge badge-secondary">{{ $members->count() }}</span></div>

                <div class="card-body">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th class="">E-Mail</th>
                            <th>GitHub</th>
                            <th>Member since</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($members as $member)
                            <tr>
                                <td>{{ $member->name }}</td>
                                <td><a target="_blank" href="mailto:{{ $member->redirect_email }}">{{ $member->redirect_email }}</a></td>
                                <td><a target="_blank" href="{{ $member->git_hub_link }}"><i class="fab fa-github-alt"></i></a></td>
                                <td>{{ optional($member->member_since)->diffForHumans() }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>



                </div>

            </div>
        </div>
    </div>
</div>
@endsection
