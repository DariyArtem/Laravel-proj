<?php

namespace App\Http\Controllers\Post;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Post_Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        return view('Post.all', ['result' => Post::where('author_id', Auth::id())->get()]);
    }

    public function create()
    {
        return view('Post.create', ['categories' => Category::all()]);
    }

    public function show($post_id)
    {
        return "Post {$post_id}";
    }

    public function edit($post_id)
    {

        return view('Post.edit', ['result' => Post::where('id', $post_id)->get()]);
    }

    public function store(Request $request)
    {
        $validateFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'notification' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimetypes:image/jpeg,image/png',
            'images.*' => 'required|image|mimetypes:image/jpeg,image/png',
            'video' => 'required|mimetypes:video/mp4,video/avi,video/mpeg',

        ]);

        $validateCategories = $request->validate([
            'categories.*' => 'required|integer',
        ]);


        $imagesPath = Storage::put('img/postsTitles', $validateFields['image']);
        $videoPath = Storage::put('video', $validateFields['video']);
        $post = Post::create($validateFields + ['author_id' => Auth::id()]
            + ['img_path' => $imagesPath] + ['video_path' => $videoPath]);

        $categories = $validateCategories['categories'];
        $images = $validateFields['images'];
        $insertCategories = false;
        $insertImages = false;

        for ($i = 0; $i<count($categories); $i++){
            $data = [
                'post_id' => $post->id,
                'category_id' => $categories[$i],
            ];
            $insertCategories = DB::table('post_category')->insert($data);
        }

        for ($i = 0; $i<count($images); $i++){
            $imagesPath = Storage::put('img/posts', $images[$i]);
            $data = [
                'post_id' => $post->id,
                'img_path' => $imagesPath,
            ];
            $insertImages = DB::table('post_images')->insert($data);
        }

        if ($post && $insertCategories && $insertImages) {
            return redirect(route('posts'))->withSuccess("New post have been created");
        }

        return redirect(route('posts.create'))->withErrors([
            'formError' => 'An error occurred'
        ]);
    }

    public function update(Request $request, $post_id)
    {

        $validateFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'notification' => 'required',
            'content' => 'required',
        ]);

        $post = Post::find($post_id);

        if ($request->image !== null) {

            $validateImage = $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            Storage::delete($post->img_path);
            $imagePath = Storage::put('img/postsTitles', $validateImage['image']);

            $post->img_path = $imagePath;


        }
            $post->title = $validateFields['title'];
            $post->description = $validateFields['description'];
            $post->notification = $validateFields['notification'];
            $post->content = $validateFields['content'];

            $post->save();

        if ($post) {
            return redirect(route('posts'))->withSuccess("Post $post_id have been updated");
        }

        return redirect(route('posts.create'))->withErrors([
            'formError' => 'An error occurred'
        ]);
    }

    public function delete($post_id)
    {
        $delete = Post::where('id', $post_id)->first();
        if ($delete) {

            Storage::delete($delete->img_path);
            $delete->delete();

            return redirect()->back()->withSuccess("Post $post_id have been deleted");
        }

        return redirect(route('posts'))->withErrors([
            'formError' => 'An error occurred'
        ]);
    }
}
