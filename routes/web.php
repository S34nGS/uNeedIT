<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// })->middleware(['auth', 'verified'])->name('test');

Route::get('/', [PageController::class, 'showHomePage'])->name('home');
Route::get('/over-ons', [PageController::class, 'showOverOnsPage'])->name('overOns');
Route::get('/service', [PageController::class, 'showServicePage'])->name('service');
Route::get('/aanvraag', [PageController::class, 'showAanvraagPage'])->name('aanvraag');
Route::get('/faq', [PageController::class, 'showFaqPage'])->name('faq');
Route::get('/bezorgdiensten', [PageController::class, 'showBezorgdienstenPage'])->name('bezorgdiensten');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
