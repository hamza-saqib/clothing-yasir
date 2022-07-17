@component('mail::message')
# Contact Us New message

Contact Detailed are: <br>
<br> Name : {{$name}}
<br> Email : {{$email}}
<br> Phone : {{$phone}}
<br> Subject : {{$subject}}
<br> Message : {{$message}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
