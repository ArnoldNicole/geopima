@component('mail::message')
# New Message

## Message From {{$data['name']}}
### {{$data['email']}}

Subject: {{$data['subject']}}

@component('mail::panel')
{{$data['message']}}
@endcomponent

Thanks,<br>
{{ config('app.name') }} <br>

<small> Please do not reply to this email you can reach {{$data['name']}} via {{$data['email']}}</small>
@endcomponent