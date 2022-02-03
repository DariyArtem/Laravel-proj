<?php


namespace App\Http\Services;


use App\Http\Repositories\CategoryRepository;
use App\Http\Repositories\PostCategoryRepository;
use App\Http\Repositories\PostRepository;
use App\Models\Post;

class PostCategoryService
{
    protected $postCategoryRepository;
    protected $postRepository;
    protected $categoryRepository;

    public function __construct(
        PostCategoryRepository $postCategoryRepository,
        PostRepository $postRepository,
        CategoryRepository $categoryRepository
    )
    {
        $this->postCategoryRepository = $postCategoryRepository;
        $this->postRepository = $postRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function getPostCategoryByCategoryId($id)
    {
        return $this->postCategoryRepository->getPostCategoryByCategoryId($id);
    }

    public function getPostsFromPostCategory($id)
    {

        $posts_category = $this->getPostCategoryByCategoryId($id);
        $posts = [];
        foreach ($posts_category as $post_category) {
            foreach ($this->postRepository->getPostById($post_category->post_id) as $post) {
                array_push($posts, $post);
            }
        }
        return $posts;
    }

    public function getCategoriesByPostId($id)
    {
        $posts_category = $this->postCategoryRepository->getPostCategoryByPostId($id);
        $categories = [];

        foreach ($posts_category as $post_category) {
            array_push($categories, [
               "id" => $post_category->category_id,
               "name" =>  $this->categoryRepository->getCategoryNameById($post_category->category_id)
            ]);
        }

        return $categories;
    }

    public function getSimilarPostsFromPostCategory($id)
    {
        $posts_category = $this->getSimilarPostsByCategoryId($id);
        $posts = [];
        foreach ($posts_category as $post_category) {
            foreach ($this->postRepository->getPostById($post_category->post_id) as $post) {
                array_push($posts, $post);
            }
        }
        return $posts;
    }

    public function getSimilarPostsByCategoryId($id)
    {
        return $this->postCategoryRepository->getSimilarPostsByCategoryId($id);
    }

}
