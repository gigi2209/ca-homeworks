@component('mail::message')
Hello **{{$data->email}}**,  {{-- use double space for line break --}}
Thank you for choosing Mailtrap!

Click below to start working right now
@component('mail::button', ['url' => 'google.com'])
Go to your inbox
@endcomponent
Sincerely,  
Mailtrap team.
@endcomponent

