<?php

use App\Http\Controllers\BidderController;
use App\Http\Controllers\CarController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/bidders', [BidderController::class, 'index'])->name('bidders.index');
Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
