<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ApplicationController;

Route::get('/prihlaska', [ApplicationController::class, 'create'])->name('application.create');
Route::post('/prihlaska', [ApplicationController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('application.store');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/zasady-ochrany-osobnich-udaju', 'gdpr')->name('gdpr');

Route::post('/recenze', [ReviewController::class, 'store'])
    ->name('reviews.public.store')
    ->middleware('throttle:10,1'); // max 5 pokusů za minutu, ochrana proti spamu

Route::middleware('auth')->group(function () {

    Route::put('/admin/profile', [AdminController::class, 'updateProfile'])->name('profile.settings.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::post('/admin/instructors', [AdminController::class, 'storeInstructor'])->name('instructors.store');
    Route::put('/admin/instructors/{instructor}', [AdminController::class, 'updateInstructor'])->name('instructors.update');
    Route::delete('/admin/instructors/{instructor}', [AdminController::class, 'destroyInstructor'])->name('instructors.destroy');

    Route::post('/admin/vehicles', [AdminController::class, 'storeVehicle'])->name('vehicles.store');
    Route::put('/admin/vehicles/{vehicle}', [AdminController::class, 'updateVehicle'])->name('vehicles.update');
    Route::delete('/admin/vehicles/{vehicle}', [AdminController::class, 'destroyVehicle'])->name('vehicles.destroy');

    Route::post('/admin/reviews', [AdminController::class, 'storeReview'])->name('reviews.store');
    Route::put('/admin/reviews/{review}', [AdminController::class, 'updateReview'])->name('reviews.update');
    Route::delete('/admin/reviews/{review}', [AdminController::class, 'destroyReview'])->name('reviews.destroy');

});

require __DIR__.'/auth.php';
