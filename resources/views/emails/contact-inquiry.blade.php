<x-mail::message>
# New contact inquiry

**Name:** {{ $inquiry['name'] }}

**Email:** {{ $inquiry['email'] ?: 'Not provided' }}

**Phone:** {{ $inquiry['phone'] ?: 'Not provided' }}

**Message**

{{ $inquiry['message'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
