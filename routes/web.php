<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PracticeSessionController;

Route::get('/', function () {
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

Route::get('/practice-sessions', [PracticeSessionController::class, 'index'])->name('practice-sessions.index');
Route::get('/practice-sessions/{id}', [PracticeSessionController::class, 'show'])->name('practice-sessions.show');

// Admin routes
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin');
    // Practice Sessions
    Route::get('/admin/practice-sessions', [AdminController::class, 'practiceSessions'])
        ->name('admin.practice-sessions.index')->middleware('admin');

    Route::get('/admin/practice-sessions/create', [AdminController::class, 'createPracticeSession'])
        ->name('admin.practice-sessions.create')->middleware('admin');

    Route::post('/admin/practice-sessions', [AdminController::class, 'storePracticeSession'])
        ->name('admin.practice-sessions.store')->middleware('admin');

    Route::get('/admin/practice-sessions/{practiceSession}', [AdminController::class, 'showPracticeSession'])
        ->name('admin.practice-sessions.show')->middleware('admin');

    Route::get('/admin/practice-sessions/{practiceSession}/edit', [AdminController::class, 'editPracticeSession'])
        ->name('admin.practice-sessions.edit')->middleware('admin');

    Route::put('/admin/practice-sessions/{practiceSession}', [AdminController::class, 'updatePracticeSession'])
        ->name('admin.practice-sessions.update')->middleware('admin');

    Route::delete('/admin/practice-sessions/{practiceSession}', [AdminController::class, 'destroyPracticeSession'])
        ->name('admin.practice-sessions.destroy')->middleware('admin');

    // Articles
    Route::get('/admin/articles', [AdminController::class, 'articles'])->name('admin.articles.index')->middleware('admin');
    Route::get('/admin/articles/create', [AdminController::class, 'createArticle'])->name('admin.articles.create')->middleware('admin');
    Route::post('/admin/articles', [AdminController::class, 'storeArticle'])->name('admin.articles.store')->middleware('admin');
    Route::get('/admin/articles/{article}/edit', [AdminController::class, 'editArticle'])->name('admin.articles.edit')->middleware('admin');
    Route::put('/admin/articles/{article}', [AdminController::class, 'updateArticle'])->name('admin.articles.update')->middleware('admin');
    Route::delete('/admin/articles/{article}', [AdminController::class, 'destroyArticle'])->name('admin.articles.destroy')->middleware('admin');

    // Users
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users.index')->middleware('admin');
    Route::get('/admin/users/create', [AdminController::class, 'createUser'])->name('admin.users.create')->middleware('admin');
    Route::post('/admin/users', [AdminController::class, 'storeUser'])->name('admin.users.store')->middleware('admin');
    Route::get('/admin/users/{user}/edit', [AdminController::class, 'editUser'])->name('admin.users.edit')->middleware('admin');
    Route::put('/admin/users/{user}', [AdminController::class, 'updateUser'])->name('admin.users.update')->middleware('admin');
    Route::delete('/admin/users/{user}', [AdminController::class, 'destroyUser'])->name('admin.users.destroy')->middleware('admin');
});

require __DIR__ . '/auth.php';
