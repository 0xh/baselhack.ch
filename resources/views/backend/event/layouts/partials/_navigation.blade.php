

<div class="card">
    <div class="card-header">
        <strong>Participants</strong>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item @if(current_route('backend.event.participants.index'))list-group-item-dark @endif">
            <a class="text-dark" href="{{ route('backend.event.participants.index') }}">Overview</a>
        </li>

    </ul>
</div>






<div class="card mt-3">
    <div class="card-header">
        <strong>Newsletter</strong>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item @if(current_route('backend.event.subscribers.index'))list-group-item-dark @endif">
            <a class="text-dark" href="{{ route('backend.event.subscribers.index') }}">Subscribers</a>
        </li>

    </ul>
</div>




