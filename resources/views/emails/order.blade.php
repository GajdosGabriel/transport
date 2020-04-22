@component('mail::message')
# Hello,

New message from contact form.

# ------ Client details ------

Name: <strong>{{ $data['name'] }} {{ $data['surname'] }}</strong> <br>
Promissory note: <strong>£ {{ $data['promissory_note'] }} </strong> <br>
Street: {{ $data['street'] }} {{ $data['zip'] }} <br>
City: {{ $data['city'] }} <br>
Region: {{ $data['region'] }} <br>
Country: {{ $data['country'] }} Nationality: {{ $data['nationality'] }} <br>
Email: <strong>{{ $data['email'] }}</strong> <br>
Phone: <strong>{{ $data['phone_code'] }} / {{ $data['phone'] }}</strong> <br>
Government ID: {{ $data['government_id'] }} <br>

@component('mail::button', ['url' => config('app.url')])
Go to web page {{ config('app.name') }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
