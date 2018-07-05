


<div class="card">
    <div class="card-header">
        <strong>Settings</strong>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item @if(current_route('backend.users.settings.profile.index'))list-group-item-dark @endif">
            <a class="text-dark" href="{{ route('backend.users.settings.profile.index') }}">Profile</a>
        </li>

        <li class="list-group-item @if(current_route('backend.users.settings.language.index'))list-group-item-dark @endif">
            <a class="text-dark" href="{{ route('backend.users.settings.language.index') }}">Language</a>
        </li>

        <li class="list-group-item @if(current_route('backend.users.settings.security.index'))list-group-item-dark @endif">
            <a class="text-dark" href="{{ route('backend.users.settings.security.index') }}">Security</a>
        </li>
    </ul>
</div>

