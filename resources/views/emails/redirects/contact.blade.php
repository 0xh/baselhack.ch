@component('mail::message')

    Hello **{{ $contact['topic'] }}-Team**

     {{ $contact['message'] }}

    Thanks,
    {{ $contact['name'] }} / <{{ $contact['email'] }}>

@endcomponent

