<?php

namespace App\Http\Controllers;

use App\Helpers\DateFormatHelper;
use App\Http\Services\CategoryService;
use App\Http\Services\PostCategoryService;
use App\Http\Services\PostService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    protected $categoryService;
    protected $postService;
    protected $postCategoryService;

    public function __construct(CategoryService $categoryService, PostService $postService, PostCategoryService $postCategoryService)
    {
        $this->categoryService = $categoryService;
        $this->postService = $postService;
        $this->postCategoryService = $postCategoryService;
    }

    public function index()
    {
        return view("Admin.pages.categories.index", ["result" => $this->categoryService->getAll()]);
    }

    public function showPageWithCategories(){
        return view("pages.categories", ["categories" => $this->categoryService->getAll()]);
    }

    public function create()
    {
        return view("Admin.pages.categories.create");
    }

    public function showOne($id)
    {
        $popular = $this->postService->getPopular(5);
        $latest = $this->postService->getLatestPosts(4);
        $posts = $this->postCategoryService->getPostsFromPostCategory($id);
        $datesOfPosts = $this->postService->getDatesOfPosts($posts);
        $datesOfPopularPosts = $this->postService->getDatesOfPosts($popular);
        $datesOfRecentPosts = $this->postService->getDatesOfPosts($latest);

        return view("pages.category")
            ->with("posts", $posts)
            ->with("latest", $latest)
            ->with("popular", $popular)
            ->with("datesOfPopularPosts", $datesOfPopularPosts)
            ->with("datesOfRecentPosts", $datesOfRecentPosts)
            ->with("datesOfPosts", $datesOfPosts)
            ->with("categories", $this->categoryService->getAll())
            ->with("category_name", $this->categoryService->getCategoryNameById($id));
    }

    public function store(Request $request)
    {
        $data = $request->only([
            "name",
            "image",
        ]);

        try {
            $this->categoryService->save($data);
        } catch (\Exception $e){
            return redirect(route("auth.admin.categories.create"))->withErrors([
                "formError" => "An error occurred"
            ]);
        }

        return redirect(route("auth.admin.categories"))->withSuccess("New category have been created");
    }

    public function edit($id)
    {
        return view("Admin.pages.categories.edit", ["category" => $this->categoryService->getCategoryById($id)]);
    }

    public function update(Request $request, $category_id)
    {

        try {
            $this->categoryService->edit($request, $category_id);
        } catch (\Exception $e){
            return redirect(route("auth.admin.categories.edit", $category_id))->withErrors([
                "formError" => "An error occurred"
            ]);
        }

        return redirect(route("auth.admin.categories"))->withSuccess("Category $category_id have been updated");

    }
}
