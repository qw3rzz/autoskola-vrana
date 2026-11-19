<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ProfileSettingsController;

Route::post('/kontakt', [ContactController::class, 'send'])
    ->middleware('throttle:5,10')
    ->name('contact.send');

Route::get('/prihlaska', [ApplicationController::class, 'create'])->name('application.create');
Route::post('/prihlaska', [ApplicationController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('application.store');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/zasady-ochrany-osobnich-udaju', 'gdpr')->name('gdpr');
Route::view('/prihlaska', 'prihlaska')->name('prihlaska');

Route::post('/recenze', [ReviewController::class, 'store'])
    ->name('reviews.public.store')
    ->middleware('throttle:10,1'); // max 5 pokusů za minutu, ochrana proti spamu

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->group(function () {
        Route::get('dashboard', DashboardController::class)->name('dashboard');

        Route::put('profile', [ProfileSettingsController::class, 'update'])
            ->name('profile.settings.update');

        Route::resource('instructors', InstructorController::class)->only(['store', 'update', 'destroy']);
        Route::resource('vehicles', VehicleController::class)->only(['store', 'update', 'destroy']);
        Route::resource('reviews', ReviewController::class)->only(['store', 'update', 'destroy']);
    });

});

require __DIR__.'/auth.php';
