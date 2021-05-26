@component('mail::message')
# Welcome To Our Shopping Mall Platform

You may now proceed to verify your account;

@component('mail::button', ['url' => '/'])
    Learn More
@endcomponent

Thanks,<br>
    {{ config('app.name') }}
@endcomponent

