<?php

namespace App\Http\Controllers;

use App\Helpers\DateFormatHelper;
use App\Http\Services\CategoryService;
use App\Http\Services\PostService;
use App\Http\Services\UserService;

class PagesController extends Controller
{
    /**
     * @var CategoryService
     */
    private $categoryService;
    /**
     * @var PostService
     */
    private $postService;
    /**
     * @var UserService
     */
    private $userService;

    public function __construct(CategoryService $categoryService, PostService $postService, UserService $userService)
    {
        $this->categoryService = $categoryService;
        $this->postService = $postService;
        $this->userService = $userService;
    }

    public function homePage()
    {
        $popular = $this->postService->getPopular(5);
        $latestPosts = $this->postService->getLatestPosts(5);
        $featured = $this->postService->getFeatured();
        $datesOfPopularPosts = $this->postService->getDatesOfPosts($popular);
        $datesOfLatestPosts = $this->postService->getDatesOfPosts($latestPosts);

        return view('pages.home')
            ->with('categories', $this->categoryService->getAll())
            ->with('featuredPosts', $featured)
            ->with('latestPosts', $latestPosts)
            ->with('popular', $popular)
            ->with('users', $this->userService->getAll())
            ->with('datesOfPopularPosts', $datesOfPopularPosts)
            ->with('datesOfLatestPosts', $datesOfLatestPosts);
    }

    public function authorPage($id){
        $popular = $this->postService->getPopularByAuthorId($id);
        $recent = $this->postService->getLatestPostsByAuthorId($id);
        $datesOfPopularPosts = $this->postService->getDatesOfPosts($popular);
        $datesOfRecentPosts = $this->postService->getDatesOfPosts($recent);

        return view("pages.author")
            ->with('info', $this->userService->getUserById($id))
            ->with('recent', $recent)
            ->with('popular', $popular)
            ->with("datesOfPopularPosts", $datesOfPopularPosts)
            ->with("datesOfRecentPosts", $datesOfRecentPosts);
    }

    public function aboutPage()
    {
        return view('pages.about')->with('author', $this->userService->getBlogAuthorById(4));
    }

}
