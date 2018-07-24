@component('mail::message')

    To: **{{ $contact['topic'] . '-Team' }}**

     {{ $contact['message'] }}

    Thanks,
    {{ $contact['name'] }} / <{{ $contact['email'] }}>

@endcomponent

