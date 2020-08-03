@component('mail::message')
# thank you for your message

<strong>Name : </strong>{{ $data['name'] }} <br>
<strong>email : </strong>{{ $data['email'] }} <br>
<strong>subject : </strong>{{ $data['subject'] }} <br>
<strong>message : </strong>{{ $data['message'] }}

@endcomponent