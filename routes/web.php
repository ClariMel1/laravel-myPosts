<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('/posts', [PostsController::class, 'index'])->middleware(['auth', 'verified'])->name('posts.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{slug}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::get('/categories/{slug}', [CategoryController::class, 'show'])->name('categories.show');
Route::put('/categories/{slug}', [CategoryController::class, 'update'])->name('categories.update');

require __DIR__.'/auth.php';
