<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function (){

    Route::get('users', [AdminController::class, 'index'])->name('admin.users');
    Route::get('users/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('users/edit/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::get('categories', [CategoryController::class, 'index'])->name('admin.categories');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('categories/create', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('categories/edit/{id}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('categories/edit/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::get('messages', [MessageController::class, 'show'])->name('admin.messages');
    Route::delete('messages/{id}', [MessageController::class, 'delete'])->name('admin.messages.delete');
});
