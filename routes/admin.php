<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


Route::prefix('admin')->group(function(){

    Route::get('posts', [AdminController::class, 'index'])->name('admin.posts');

    Route::get('posts/create', [AdminController::class, 'create'])
    ->name('admin.posts.create');

    Route::post('posts/create', [AdminController::class, 'store'])
    ->name('admin.posts.store');

    Route::get('posts/{post}', [AdminController::class, 'show'])
    ->name('admin.posts.show');

    Route::get('posts/{post}/edit', [AdminController::class, 'edit'])
    ->name('admin.posts.edit');

    Route::put('posts/{post}', [AdminController::class, 'update'])
    ->name('admin.posts.update');

    Route::delete('posts/{post}', [AdminController::class, 'delete'])
    ->name('admin.posts.delete');

    Route::delete('posts/{post}/like', [AdminController::class, 'like'])
    ->name('admin.posts.like');
});
