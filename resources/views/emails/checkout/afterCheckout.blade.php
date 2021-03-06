@component('mail::message')
# Register Camp: {{ $checkout->Camp->title }}

Hi {{ $checkout->User->name }}
<br>
Thank You for registering for the camp, please see payment instructions by clicking the button below.

@component('mail::button', ['url' => route('dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
