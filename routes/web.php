<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AanvraagController;
use Illuminate\Support\Facades\Route;

// })->middleware(['auth', 'verified'])->name('test');

Route::get('/', [PageController::class, 'showHomePage'])->name('home');
Route::get('/over-ons', [PageController::class, 'showOverOnsPage'])->name('overOns');
Route::get('/service', [PageController::class, 'showServicePage'])->name('service');
Route::get('/aanvraag', [PageController::class, 'showAanvraagPage'])->name('aanvraag');
Route::get('/faq', [PageController::class, 'showFaqPage'])->name('faq');
Route::get('/bezorgdiensten', [PageController::class, 'showBezorgdienstenPage'])->name('bezorgdiensten');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/aanvragen', [AanvraagController::class, 'show'])->name('aanvragen');
    Route::delete('/aanvragen/{id}', [AanvraagController::class, 'destroy'])->name('aanvragen.destroy');
    Route::get('/aanvragen/{id}/edit', [AanvraagController::class, 'edit'])->name('aanvragen.edit');
    Route::put('/aanvragen/{id}', [AanvraagController::class, 'update'])->name('aanvragen.update');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
