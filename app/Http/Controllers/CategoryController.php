<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        return view("Admin.pages.categories.index", ["result" => Category::all()]);
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
        $validateFields = $request->validate([
            "name" => "required",
            "image" => "required|image|mimetypes:image/jpeg,image/png",
        ]);

        $imagePath = Storage::put("img/categories", $validateFields["image"]);

        $category = Category::create($validateFields + ["img_path" => $imagePath]);

        if ($category) {

            return redirect(route("auth.admin.categories"))->withSuccess("New category have been created");
        }

        return redirect(route("auth.admin.categories.create"))->withErrors([
            "formError" => "An error occurred"
        ]);
    }

    public function edit($category_id)
    {
        return view("Admin.pages.categories.edit", ["result" => Category::where("id", $category_id)->get()]);
    }

    public function update(Request $request, $category_id)
    {
        $validateFields = $request->validate([
            "name" => "required",
        ]);

        $category = Category::find($category_id);

        if ($request->image !== null) {

            $validateImage = $request->validate([
                "image" => "image|mimes:jpeg,png,jpg,gif,svg",
            ]);

            Storage::delete($category->img_path);
            $imagePath = Storage::put("img/categories", $validateImage["image"]);

            $category->img_path = $imagePath;

        }

        $category->name = $validateFields["name"];
        $category->save();

        if ($category) {
            return redirect(route("auth.admin.categories"))->withSuccess("Category $category_id have been updated");
        }

        return redirect(route("auth.admin.categories"))->withErrors([
            "formError" => "An error occurred"
        ]);
    }
}
