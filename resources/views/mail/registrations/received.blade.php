<x-mail.message>
    <x-slot:preview>You're registered.</x-slot>
    <p>Dear {{ $registration->first_name }},</p>
    <p>This is Ann from Kabuvu, confirming your registration for Catch Your Vision on <strong>{{ \Carbon\Carbon::parse($registration->event->start_date)->format('l \\t\\h\\e jS \\of F Y') }}</strong>.</p>
    <p>I'll send you reminders as the day approaches. In the meantime, where are you based? I want to make sure the event times work for you.</p>
        <p>See you soon!</p>
        <p>-Ann</p>


</x-mail.message>
