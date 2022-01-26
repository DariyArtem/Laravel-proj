<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home.index')
            ->with('categories', Category::all())
            ->with('featuredPosts', Post::paginate(6))
            ->with('latestPosts', Post::orderBy('created_at', 'desc')->paginate(5))
            ->with('users', User::all())
            ->with('popular', Post::orderBy('views', 'desc')->limit(5)->get());
    }
}
