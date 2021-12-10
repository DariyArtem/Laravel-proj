<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return 'Blog page';
    }

    public function show($id){
        return "{$id} post from blog";
    }
}
