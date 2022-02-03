<?php


namespace App\Http\Repositories;


use App\Models\PostCategory;

class PostCategoryRepository
{
    protected $postCategory;

    public function __construct(PostCategory $postCategory)
    {
        $this->postCategory = $postCategory;
    }

    public function getPostCategoryByCategoryId($id)
    {
        return $this->postCategory::where("category_id", $id)->inRandomOrder()->limit(4)->get();
    }

    public function getPostCategoryByPostId($id)
    {
        return $this->postCategory::where("post_id", $id)->get();
    }

    public function getSimilarPostsByCategoryId($id)
    {
        return $this->postCategory::where("category_id", $id)->inRandomOrder()->limit(3)->get();
    }

}
