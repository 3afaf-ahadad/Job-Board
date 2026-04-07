<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;


Route::get('/listings', [ListingController::class, 'index'])->name('listings.index');

Route::post('/listings/store', [ListingController::class, 'store'])->name('listings.store');
Route::get('/listings/create', [ListingController::class, 'create'])->name('listings.create');

Route::put('/listings/{id}', [ListingController::class, 'update'])->name('listings.update');

Route::get('/listings/{id}', [ListingController::class, 'show'])->name('listings.show');
Route::delete('/listings/{id}', [ListingController::class, 'destroy'])->name('listings.destroy');

Route::get('/listings/{id}/edit', [ListingController::class, 'edit'])->name('listings.edit');
