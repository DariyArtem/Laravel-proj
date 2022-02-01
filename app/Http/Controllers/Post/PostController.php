<?php

namespace App\Http\Controllers\Post;


use App\Helpers\DateFormatHelper;
use App\Http\Controllers\Controller;
use App\Http\Services\CategoryService;
use App\Http\Services\PostCategoryService;
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
    protected $categoryService;
    protected $postCategoryService;

    public function __construct(PostService $postService, CategoryService $categoryService, PostCategoryService $postCategoryService)
    {
        $this->postService = $postService;
        $this->categoryService = $categoryService;
        $this->postCategoryService = $postCategoryService;
    }
    public function index()
    {
        return view("pages.posts.index", ["result" => Post::where("author_id", Auth::id())->get()]);
    }

    public function create()
    {
        return view("pages.posts.create", ["categories" => $this->categoryService->getAll()]);
    }

    public function show($post_id)
    {
        Post::where("id", $post_id)->first()->increment("views", 1);
        $post = $this->postService->getPostById($post_id);
        $popular = $this->postService->getPopular(5);
        $similar = $this->postCategoryService->getSimilarPostsFromPostCategory(
            Post::find($post_id)->categories[rand(0, count(Post::find($post_id)->categories) - 1)]->id
        );
        $dateOfSimilarPosts = $this->postService->getDatesOfPosts($similar);
        $dateOfPopularPosts =  $this->postService->getDatesOfPosts($popular);
        $dateOfPost = $this->postService->getDatesOfPosts($post);
        $categories = $this->postCategoryService->getCategoriesByPostId($post_id);
        return view("pages.single")
            ->with("currentPost", $post)
            ->with("popular", $popular)
            ->with("similar", $similar)
            ->with("dateOfPost", $dateOfPost)
            ->with("categories", $categories)
            ->with("dateOfPopularPosts", $dateOfPopularPosts)
            ->with("dateOfSimilarPosts", $dateOfSimilarPosts);
    }

    public function edit($id)
    {
        return view("pages.posts.edit", ["result" => $this->postService->getPostById($id)]);
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
