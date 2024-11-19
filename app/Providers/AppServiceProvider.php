<?php

namespace App\Providers;

use App\Events\EventRegistrationReceived;
use App\Mail\RegistrationReceived;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\ServiceProvider;
use function Illuminate\Events\queueable;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(queueable(function (EventRegistrationReceived $event) {
            Mail::to($event->registration->email_address)
                ->queue(new RegistrationReceived($event->registration));
        }));
    }
}
