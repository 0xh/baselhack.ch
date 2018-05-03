
<div class="card mb-3">
    <div class="card-header">
        <strong class="mr-2">Dashboard</strong>  <i class="fal fa-tachometer"></i>

    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <a href="{{ route('backend.association.dashboard.index') }}">Overview</a>

        </li>
    </ul>
</div>


<div class="card mb-3">
    <div class="card-header">
        <strong class="mr-2">Members</strong> <i class="fal fa-users"></i>

    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <a href="{{ route('backend.association.members.index') }}">Overview</a>

            <div class="float-right">

                <a href="{{ route('backend.association.members.create') }}"><i style="color: black;" class="fal fa-plus-circle mr-2"></i></a>

            </div>

        </li>
    </ul>
</div>




<div class="card mb-3">
    <div class="card-header">
        <strong class="mr-2">Passwords</strong> <i class="fal fa-key"></i>

    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <a href="{{ route('backend.association.passwords.index') }}">Overview</a>

            <div class="float-right">

                <a href="{{ route('backend.association.passwords.create') }}"><i style="color: black;" class="fal fa-plus-circle mr-2"></i></a>

            </div>

        </li>
    </ul>
</div>







