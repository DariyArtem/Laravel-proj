<?php

use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\User\UserController;
use App\Http\Middleware\LogMiddleware;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route:: view('/', 'home.index',
    ['categories' => Category::all(), 'posts' => Post::all(), 'users' => User::all()])
    ->name('home')->middleware(LogMiddleware::class);
Route:: view('/about', 'about.index')->name('about')->middleware(LogMiddleware::class);
Route:: view('/contact', 'contact.index')->name('contact')->middleware(LogMiddleware::class);
Route:: view('/search', 'searchPage.index')->name('search')->middleware(LogMiddleware::class);
Route:: view('/single', 'SinglePostPage.index')->name('single')->middleware(LogMiddleware::class);
Route:: view('/author', 'AuthorPage.index')->name('author')->middleware(LogMiddleware::class);
Route:: view('/category', 'CategoryPage.index')->name('category')->middleware(LogMiddleware::class);
Route::post('/message', [MessageController::class, 'store'])->name('message')->middleware(LogMiddleware::class);

Route::redirect('/home', '/')->name('home.redirect');


Route::middleware(['auth', 'user'])->group(function () {
    Route::get('private', function () {return view('private');})->name('private');
    Route::get('settings', [UserController::class, 'index'])->name('settings');
    Route::put('settings', [UserController::class, 'update'])->name('settings.update');
});



Route::view('recovery', 'Account.passwordRecovery')->name('recovery');
Route::get('logout', [LogoutController::class, 'logout'])->name('logout');

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.login');
});


Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{blog}', [BlogController::class, 'show'])->name('blog.show');


Route::fallback(function () {
    return view('404');
});





