@component('mail::message')
# This is the view page of my email

This is the body of my Test message.

@component('mail::button', ['url' => '/menukaartcharissa/public'])
{{--@component('mail::button', ['url' => '/'])--}}
Go to MenukaartCharissa
@endcomponent

Please visit again,<br>
{{ config('app.name') }}
@endcomponent
