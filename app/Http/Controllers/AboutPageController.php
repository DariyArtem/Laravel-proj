<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function index(){
        return view('pages.about.index')->with('author', User::where('role_id', 4)->first());
    }
}
