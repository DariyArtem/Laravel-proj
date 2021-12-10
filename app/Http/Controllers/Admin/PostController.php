<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'Page with list of posts';
    }
    public function create()
    {
        return 'Page for creating post';
    }
    public function show($post_id)
    {
        return "Post {$post_id}";
    }
    public function edit($post_id)
    {
        return "Page for editing Post {$post_id}";
    }
    public function store()
    {
        return 'Request to store a post';
    }
    public function update()
    {
        return 'Request to update a post';
    }
    public function delete()
    {
        return 'Request to delete a post';
    }
}
