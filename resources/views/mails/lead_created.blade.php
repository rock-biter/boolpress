@component('mail::message')
# Nuovo Contatto

## {{$lead->name}}<br>
#### {{$lead->email}}<br>
{{ $lead->message }}<br>

 
{{ config('app.name') }}
@endcomponent