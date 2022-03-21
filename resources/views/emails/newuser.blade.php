@component('mail::message')
    # Welcome new user
    {{$name}}
    Have fun making new recipes.

    @component('mail::button', ['url' => '/menukaartcharissa/public'])
        Go to MenukaartCharissa
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
