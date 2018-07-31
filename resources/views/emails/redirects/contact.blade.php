@component('mail::message')

    To: **{{ strtoupper($contact['topic']) }}**
    From **{{ strtoupper($contact['name']) }}**

    {{ $contact['message'] }}

    {{ $contact['email'] }}

@endcomponent

