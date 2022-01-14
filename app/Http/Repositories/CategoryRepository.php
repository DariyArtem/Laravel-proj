<?php


namespace App\Http\Repositories;


use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryRepository
{

    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function save($validated)
    {
        return $this->category::create([
            "name" => $validated["name"],
            "img_path" => $validated["image"]
        ]);
    }

    public function update($id, $validated, $img)
    {
        $category = $this->category::find($id);

        if ($img !== "/"){
            Storage::delete($category->img_path);
        }
        $img_path = Storage::put("img/categories", $img);
        $category->name = $validated["name"];
        $category->img_path = $img_path;

        $category->save();

        return $category->fresh();
    }

}
