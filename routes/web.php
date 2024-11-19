<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/home', function () {
    return view('welcome');
})->name('login');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::middleware('auth')->group(function () {
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/registration', \App\Http\RequestHandlers\PostRegistrationRequestHandler::class)
    ->middleware(\Spatie\Honeypot\ProtectAgainstSpam::class)
    ->name('registration');

//require __DIR__.'/auth.php';
