@component('mail::message')
# Hi,

Welcome to the {{ config('app.name') }}, thanks for signing up, now you can choose your plan and start your journey with us.

@component('mail::button', ['url' => route('login')])
    Login Now
@endcomponent

<br>Thanks,<br>
{{ config('app.name') }} Team
@endcomponent
