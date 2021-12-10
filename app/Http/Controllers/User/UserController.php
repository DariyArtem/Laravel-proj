<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
//    public function index()
//    {
//
//        return view('Post.all', ['result'=> User::where('id', Auth::id())->get()]);
//    }
//    public function create()
//    {
//        return view('Post.create');
//    }
//    public function show($post_id)
//    {
//        return "Post {$post_id}";
//    }
//    public function edit($post_id)
//    {
//        return "Page for editing Post {$post_id}";
//    }
//    public function store(Request $request)
//    {
//
//        $validateFields = $request->validate([
//            'title' => 'required',
//            'description' => 'required',
//            'notification' => 'required',
//            'content' => 'required',
//
//        ]);
//       $post = Posts::create($validateFields + ['author_id' => Auth::id()]);
//
//
//        if($post){
//            return redirect(route('posts'));
//        }
//
//        return redirect(route('posts.create'))->withErrors([
//            'formError' => 'An error occurred'
//        ]);
//    }
//    public function update()
//    {
//        return 'Request to update a post';
//    }
//    public function delete()
//    {
//        return 'Request to delete a post';
//    }
}
