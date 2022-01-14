<?php


namespace App\Http\Repositories;


use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostRepository
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function save($validateFields, $validateCategories, $imagesPath, $videoPath){
        $categories = $validateCategories["categories"];
        $images = $validateFields["images"];
        $insertCategories = false;
        $insertImages = false;
        $post = Post::create($validateFields + ["author_id" => Auth::id()]
            + ["img_path" => $imagesPath] + ["video_path" => $videoPath]);

        for ($i = 0; $i < count($categories); $i++) {
            $data = [
                "post_id" => $post->id,
                "category_id" => $categories[$i],
            ];
            $insertCategories = PostCategory::insert($data);

        }

        for ($i = 0; $i < count($images); $i++) {
            $imagesPath = Storage::put("img/posts", $images[$i]);
            $data = [
                "post_id" => $post->id,
                "img_path" => $imagesPath,
            ];
            $insertImages = PostImage::insert($data);
        }

        return ($post && $insertCategories && $insertImages);
    }

    public function delete($post_id)
    {
        $post = $this->post;

        if ($post) {

            Storage::delete($post->img_path);
            return $post->delete();

        }
        return $post;
    }

    public function update( $validateFields, $imagePath, $post_id)
    {

        $post = $this->post::find($post_id);

        if ($imagePath !== '/'){
            Storage::delete($post->img_path);
            $post->img_path = $imagePath;
        }

        $post->title = $validateFields["title"];
        $post->description = $validateFields["description"];
        $post->notification = $validateFields["notification"];
        $post->content = $validateFields["content"];
        $post->save();

        return $post->fresh();
    }
}
