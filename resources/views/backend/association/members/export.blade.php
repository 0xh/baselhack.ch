<table class="table table-striped">
    <thead>
    <tr>
        <th>Status</th>
        <th>Name</th>
        <th class="">E-Mail</th>
        <th>GitHub</th>
        <th>Member since</th>
    </tr>
    </thead>
    <tbody>

    @foreach($members as $member)
        <tr>
            <td>{{ $member->member_status }}</td>
            <td><a href="{{ route('members.edit',$member) }}">{{ $member->name }}</a></td>
            <td><a target="_blank" href="mailto:{{ $member->redirect_email }}"><i class="fal fa-envelope"></i></a></td>
            <td><a target="_blank" href="{{ $member->git_hub_link }}">GitHub</a></td>
            <td>{{ optional($member->member_since)->diffForHumans() }}</td>
        </tr>
    @endforeach

    </tbody>
</table>
