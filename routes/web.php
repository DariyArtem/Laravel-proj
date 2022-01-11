<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Post\PostController;
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

Route:: view('/', 'pages.home.index',
    [
        'categories' => Category::all(),
        'featuredPosts' =>  Post::paginate(6), 'latestPosts' => Post::orderBy('created_at', 'desc')->paginate(5),
        'users' => User::all(), 'popular' => Post::orderBy('views', 'desc')->limit(5)->get()
    ]
)->name('home')->middleware(LogMiddleware::class);
Route::view('/categories', 'pages.categories.index', ['categories' => Category::all()])->name('categories')->middleware(LogMiddleware::class);
Route::view('/about', 'pages.about.index')->name('about')->middleware(LogMiddleware::class);
Route::view('/contact', 'pages.contact.index')->name('contact')->middleware(LogMiddleware::class);
Route::view('/search', 'pages.search.index')->name('search')->middleware(LogMiddleware::class);
Route::get('/single/{id}', [PostController::class, 'show'])->name('single')->middleware(LogMiddleware::class);
Route::get('/author/{id}', [AuthorController::class, 'index'])->name('author')->middleware(LogMiddleware::class);
Route::get('/category/{id}', [CategoryController::class, 'showOne'])->name('category')->middleware(LogMiddleware::class);
Route::post('/message', [MessageController::class, 'store'])->name('message')->middleware(LogMiddleware::class);
Route::post('/comment', [CommentController::class, 'store'])->name('comment')->middleware(LogMiddleware::class);
Route::view('recovery', 'pages.passwordRecovery.index')->name('recovery');
Route::get('logout', [LogoutController::class, 'logout'])->name('logout');

Route::redirect('/home', '/')->name('home.redirect');

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.login');
});

Route::fallback(function () {
    return view('pages.404.index');
});





