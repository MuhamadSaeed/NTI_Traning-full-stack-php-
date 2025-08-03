<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home/{name}', function ($name) {
    return view('hello', ["n" => $name]);
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index'); // List all articles

// Protected CRUD routes - only authenticated users can access
Route::middleware(['auth'])->group(function () {
    // Resource routes for articles (create, store, edit, update, destroy, show)
    // except(['index']) means skip index route (already defined above)
    Route::resource('articles', ArticleController::class)->except(['index']);
});


Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
