<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function index($id){

        return view("pages.author.index")
            ->with('info', User::where("id", $id)->first())
            ->with('recent', Post::where('author_id', $id)->orderBy('created_at', 'desc')->paginate(4))
            ->with('popular', Post::where('author_id', $id)->orderBy('views', 'desc')->limit(4)->get());
    }
}
