<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/listings', [ListingController::class, 'index'])->name('listings.index');

Route::post('/listings/store', [ListingController::class, 'store'])->name('listings.store')->middleware('auth');
Route::get('/listings/create', [ListingController::class, 'create'])->name('listings.create')->middleware('auth');;

Route::put('/listings/{id}', [ListingController::class, 'update'])->name('listings.update');

Route::get('/listings/{id}', [ListingController::class, 'show'])->name('listings.show');
Route::delete('/listings/{id}', [ListingController::class, 'destroy'])->name('listings.destroy');

Route::get('/listings/{id}/edit', [ListingController::class, 'edit'])->name('listings.edit')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
