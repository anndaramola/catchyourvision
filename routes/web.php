<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $events = \App\Models\Event::all()->map(function ($event) {
        return [
            'id' => $event->id,
            'day' => \Carbon\Carbon::parse($event->start_date)->format('D'),
            'date' => \Carbon\Carbon::parse($event->start_date)->format('d'),
            'month' => \Carbon\Carbon::parse($event->start_date)->format('M'),
            'year' => \Carbon\Carbon::parse($event->start_date)->format('y'),
        ];
    })->toArray();
    return view('landing', ['events' => $events]);
})->name('home');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/registration/{id}', function ($id) {
        $registration = App\Models\Registration::find($id);
        return new App\Mail\RegistrationReceived($registration);
    })->name('checkregister');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/registration', \App\Http\RequestHandlers\PostRegistrationRequestHandler::class)
    ->middleware(\Spatie\Honeypot\ProtectAgainstSpam::class)
    ->name('registration');

//require __DIR__.'/auth.php';
