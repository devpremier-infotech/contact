@component('mail::message')
# Welcome to DevPremier.com

Package Name: devpremier/contact <br/>

Your Name: {{$data['name']}} <br/>
Your Email: {{$data['email']}} <br/>
Your Phone: {{$data['phone']}} <br/>
Your Query: {{$data['query']}}

@component('mail::button', ['url' => url('/')])
Visit Us
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
