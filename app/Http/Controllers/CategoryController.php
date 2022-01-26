<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoryService;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        return view("Admin.pages.categories.index", ["result" => Category::all()]);
    }

    public function showPageWithCategories(){
        return view("pages.categories.index", ["categories" => Category::all()]);
    }

    public function create()
    {
        return view("Admin.pages.categories.create");
    }

    public function showOne($id)
    {
        return view("pages.category.index")
            ->with("posts_category", PostCategory::where("category_id", $id)->inRandomOrder()->limit(4)->get())
            ->with("latest", PostCategory::where("category_id", $id)->orderBy("id", "desc")->paginate(4))
            ->with("currentCategory", Category::where("id", $id)->first())
            ->with("categories", Category::all())->with("category_name", Category::where("id", $id)->first()->name)
            ->with("popular", Post::orderBy('views', 'desc')->limit(5)->get());
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

    public function edit($category_id)
    {
        return view("Admin.pages.categories.edit", ["result" => Category::where("id", $category_id)->get()]);
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
