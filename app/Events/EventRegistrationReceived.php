<?php

namespace App\Events;

use App\Models\Registration;
use Illuminate\Queue\SerializesModels;

class EventRegistrationReceived
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @param  Registration  $registration
     * @return void
     */
    public function __construct(public Registration $registration)
    {
    }
}
