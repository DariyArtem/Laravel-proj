<?php

namespace App\Http\Controllers\Post;


use App\Http\Controllers\Controller;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        return view('Post.all', ['result'=> Posts::where('author_id', Auth::id())->get()]);
    }
    public function create()
    {
        return view('Post.create');
    }
    public function show($post_id)
    {
        return "Post {$post_id}";
    }
    public function edit($post_id)
    {

        return view('Post.edit', ['result' => Posts::where('id', $post_id)->get()]);
    }
    public function store(Request $request)
    {

        $validateFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'notification' => 'required',
            'content' => 'required',

        ]);
        $post = Posts::create($validateFields + ['author_id' => Auth::id()]);

        if($post){
            return redirect(route('posts'))->withSuccess("New post have been created");
        }

        return redirect(route('posts.create'))->withErrors([
            'formError' => 'An error occurred'
        ]);
    }
    public function update(Request  $request, $post_id)
    {
        $validateFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'notification' => 'required',
            'content' => 'required',
        ]);

        $post = Posts::find($post_id);

        $post->title = $validateFields['title'];
        $post->description = $validateFields['description'];
        $post->notification = $validateFields['notification'];
        $post->content = $validateFields['content'];

        $post->save();



        if($post){
            return redirect(route('posts'))->withSuccess("Post $post_id have been updated");
        }

        return redirect(route('posts.create'))->withErrors([
            'formError' => 'An error occurred'
        ]);
    }
    public function delete($post_id)
    {
       $delete = Posts::where('id', $post_id);

        if($delete){
            $delete->delete();
            return redirect()->back()->withSuccess("Post $post_id have been deleted");
        }

        return redirect(route('posts'))->withErrors([
            'formError' => 'An error occurred'
        ]);
    }
}
