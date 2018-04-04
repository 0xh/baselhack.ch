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

</style>
@endsection
@section('content')
<div class="container">
    <div class="row">


        <div class="col-md-12">

            <a href="{{ route('members.create') }}" class="btn btn-primary float-right">Create a user</a>
            <button class="btn btn-primary btn-excel float-right">Export to .xls</button>

        </div>
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">Members</div>

                <div class="card-body">



                </div>

            </div>
        </div>
    </div>
</div>
@endsection
