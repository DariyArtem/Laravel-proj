<?php

namespace App\Http\Controllers\Post;


use App\Http\Controllers\Controller;
use App\Http\Services\PostService;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }
    public function index()
    {
        return view("pages.posts.index", ["result" => Post::where("author_id", Auth::id())->get()]);
    }

    public function create()
    {
        return view("pages.posts.create", ["categories" => Category::all()]);
    }

    public function show($post_id)
    {
        $id = Post::find($post_id)->categories[rand(0, count(Post::find($post_id)->categories) - 1)]->id;
        Post::where("id", $post_id)->first()->increment("views", 1);
        return view("pages.single.index")->with("result", Post::where("id", $post_id)->get())
            ->with("popular", Post::orderBy("views", "desc")->limit(5)->get())->with(
                "comments", Post::find($post_id)->comments)->with("recommendations", Post::find($post_id)->comments)
            ->with("similar", PostCategory::where("category_id", $id)->inRandomOrder()->limit(3)->get());
    }

    public function edit($post_id)
    {
        return view("pages.posts.edit", ["result" => Post::where("id", $post_id)->get()]);
    }

    public function store(Request $request)
    {

        try {
            $this->postService->save($request);
        }catch (\Exception $e){
            return redirect(route("posts.create"))->withErrors([
                "formMessage" => "An error occurred"
            ]);
        }
        return redirect(route("posts"))->withSuccess("New post have been created");

    }

    public function update(Request $request, $post_id)
    {
        try {
            $this->postService->update($request, $post_id);
        } catch (\Exception $e){
            return redirect(route("posts.edit", $post_id))->withErrors([
                "formMessage" => "An error occurred"
            ]);
        }
        return redirect(route("posts"))->withSuccess("Post $post_id have been deleted");
    }

    public function delete($post_id)
    {
        try {
            $this->postService->delete($post_id);
        } catch (\Exception $e){
            return redirect(route("posts"))->withErrors([
                "formMessage" => "An error occurred"
            ]);
        }
        return redirect()->back()->withSuccess("Post $post_id have been deleted");
    }
}
