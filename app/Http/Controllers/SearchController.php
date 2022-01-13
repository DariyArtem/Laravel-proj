<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function index(Request $request){
        $validatedField = $request->validate([
            "title" => "required"
        ]);

        return view("pages.search.index")
            ->with('query', $validatedField["title"])
            ->with("result", Post::where("title", "LIKE", "%{$validatedField["title"]}%")->paginate(8))
            ->with("popular", Post::orderBy("views", "desc")->limit(5)->get());
    }
}
