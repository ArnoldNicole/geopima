@component('mail::message')
# New Message

## Message From {{$data['name']}}
### {{$data['email']}}
### {{$data['phone_number']}}
Subject: {{$data['subject']}}

@component('mail::panel')
{{$data['message']}}
@endcomponent

Thanks,<br>
{{ config('app.name') }} <br>

<small> Please do not reply to this email. You can reach {{$data['name']}} via <a href="mailto:{{$data['email']}}" target="_blank">{{$data['email']}}</a> or Phone: <a target="_blank" href="tel:{{$data['phone_number']}}">{{$data['phone_number']}}</a> </small>
@endcomponent