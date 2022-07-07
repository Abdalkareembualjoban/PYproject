@component('mail::message')
# Welcome  {{$name}}

The body of your message.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/cms/admin'])
Admin Panel
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
