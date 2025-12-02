<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('stammering');
});

Route::get('/stammering', function () {
    return view('stammering');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

use App\Http\Controllers\PracticeSessionController;

Route::get('/practice-sessions', [PracticeSessionController::class, 'index'])->name('practice-sessions.index');
Route::get('/practice-sessions/{id}', [PracticeSessionController::class, 'show'])->name('practice-sessions.show');

require __DIR__.'/auth.php';
