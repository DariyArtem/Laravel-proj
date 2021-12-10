<?php

use App\Http\Controllers\Post\PostController;
use Illuminate\Support\Facades\Route;



Route::prefix('user')->middleware(['auth', 'user'])->group(function (){

    Route::get('posts', [PostController::class, 'index'])->name('posts');
    Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('posts/create', [PostController::class, 'store'])->name('posts.store');
    Route::get('posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('posts/update/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('posts/{id}', [PostController::class, 'delete'])->name('posts.delete');

});
