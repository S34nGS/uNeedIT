<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;


Route::get('/', [PageController::class, 'showHomePage'])->name('home');
Route::get('/over-ons', [PageController::class, 'showOverOnsPage'])->name('overOns');
Route::get('/service', [PageController::class, 'showServicePage'])->name('service');
Route::get('/aanvraag', [PageController::class, 'showAanvraagPage'])->name('aanvraag');
Route::get('/faq', [PageController::class, 'showFaqPage'])->name('faq');
Route::get('/bezorgdiensten', [PageController::class, 'showBezorgdienstenPage'])->name('bezorgdiensten');

Route::get('/appointments', [AppointmentController::class, 'index'])
    ->middleware('auth')
    ->name('appointment.index');
Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointment.create');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointment.store');
Route::get('/appointments/{appointment}', [AppointmentController::class, 'show'])->name('appointment.show');
Route::get('/appointments/{appointment}/edit', [AppointmentController::class, 'edit'])->name('appointment.edit');
Route::put('/appointments/{appointment}', [AppointmentController::class, 'update'])->name('appointment.update');
Route::delete('/appointments/{appointment}', [AppointmentController::class, 'destroy'])->name('appointment.destroy');

Route::get('/api/booked-dates', [AppointmentController::class, 'getBookedDates']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('login/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('login/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
