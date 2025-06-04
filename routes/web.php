<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('/posts', [PostsController::class, 'index'])->middleware(['auth', 'verified'])->name('posts.index');
Route::get('/myposts', [PostsController::class, 'myPosts'])->middleware(['auth', 'verified'])->name('posts.myPosts');
Route::get('/posts/create', [PostsController::class, 'create'])->middleware(['auth', 'verified'])->name('posts.create');
Route::post('/posts/store', [PostsController::class, 'store'])->middleware(['auth', 'verified'])->name('posts.store');
Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.show');
Route::get('/posts/{id}/edit', [PostsController::class, 'edit'])->middleware(['auth', 'verified'])->name('posts.edit');
Route::put('/posts/{id}', [PostsController::class, 'update'])->middleware(['auth', 'verified'])->name('posts.update');
Route::delete('/posts/{id}', [PostsController::class, 'destroy'])->middleware(['auth', 'verified'])->name('posts.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

require __DIR__.'/auth.php';
