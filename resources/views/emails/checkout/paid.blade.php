@component('mail::message')
# Your Transaction has been confirmed

Hi, {{$checkout->user->name}}
<br>
Your transaction has been confirmed, now you can enjoy the benefits of {{$checkout->Camp->name}} camp.

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
