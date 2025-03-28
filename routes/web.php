<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});
Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');
Route::get('/dashboard', function () {
    return view('home.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
