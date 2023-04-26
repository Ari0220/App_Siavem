@component('mail::message')
# Cambiar rol y departamento

Señor (a)  {{$email}},

{{$messages}}
@component('mail::button', ['url' => "$newLink"])
CAMBIAR ROL Y DEPARTAMENTO
@endcomponent

Muchas gracias,<br>
{{ config('app.name') }}
@endcomponent