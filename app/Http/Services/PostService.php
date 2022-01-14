<?php


namespace App\Http\Services;


use App\Http\Repositories\PostRepository;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function save($request)
    {
        $validateFields = $request->validate([
            "title" => "required",
            "description" => "required",
            "notification" => "required",
            "content" => "required",
            "image" => "required|image|mimetypes:image/jpeg,image/png,image/jpg",
            "images.*" => "required|image|mimetypes:image/jpeg,image/png",
            "video" => "required|mimetypes:video/mp4,video/avi,video/mpeg",

        ]);

        $validateCategories = $request->validate([
            "categories.*" => "required|integer",
        ]);

        $imagesPath = Storage::put("img/postsTitles", $validateFields["image"]);
        $videoPath = Storage::put("video", $validateFields["video"]);

        return $this->postRepository->save($validateFields, $validateCategories, $imagesPath, $videoPath);
    }

    public function delete($post_id)
    {
        $delete = Post::where("id", $post_id)->first();
        if ($delete) {

            Storage::delete($delete->img_path);
            $delete->delete();

        }

        return redirect(route("posts"))->withErrors([
            "formError" => "An error occurred"
        ]);
    }

    public function update($request, $post_id)
    {
        $validateFields = $request->validate([
            "title" => "required",
            "description" => "required",
            "notification" => "required",
            "content" => "required",
        ]);

        $imagePath = '/';
        if ($request->image !== null) {

            $validateImage = $request->validate([
                "image" => "image|mimes:jpeg,png,jpg,gif,svg",
            ]);

            $imagePath = Storage::put("img/postsTitles", $validateImage["image"]);

        }


        return $this->postRepository->update($validateFields, $imagePath, $post_id);

    }
}
