<?php

namespace App\Http\RequestHandlers;

use App\Events\EventRegistrationReceived;
use App\Models\Registration;
use Pariwo\Resources\Http\RequestHandlers\RequestHandler;

class PostRegistrationRequestHandler extends RequestHandler
{
    public function handle(): mixed
    {
        $this->request->validate(
            [
                'first_name' => ['required','max:255'],
                'last_name' => ['required','max:255'],
                'email' => ['required','string','lowercase','email','max:255'],
                'accept_emails' => ['accepted'],
                'accept_terms' => ['accepted'],
                'event' => ['required'],
            ]
        );

        $registration = Registration::query()
            ->where('email_address', $this->request->email)
            ->where('event_id', intval($this->request->event))
            ->first();

        if (!$registration) {
            $this->work();
        }

        return view('registration.thanks');
    }

    private function work(): void
    {
        $registration = new Registration();
        $registration->first_name = $this->request->first_name;
        $registration->last_name = $this->request->last_name;
        $registration->email_address = $this->request->email;
        $registration->event_id = $this->request->event;
        $registration->save();

        event(new EventRegistrationReceived($registration));
    }
}
