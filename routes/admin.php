<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function (){

    Route::get('users', [AdminController::class, 'index'])->name('admin.users');
    Route::get('users/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('users/edit/{id}', [AdminController::class, 'update'])->name('admin.update');
});
