<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {

        $user = Auth::user();

        if (Auth::check()) {

            $validateFields = $request->validate([
                'message' => 'required',
                'post_id' => 'required',
            ]);
            $message = Comment::create(
                $validateFields + ['name' => "$user->name" . " " . "$user->surname"] + ['email' => $user->email]
                + ['number' => $user->phone]);
            if ($message) {
                return back()->withSuccess("Your message have been sent");;
            }
            return back()->withErrors([
                'formError' => 'An error occurred'
            ]);
        }

        $validateFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'message' => 'required',
            'post_id' => 'required',
        ]);


        $message = Comment::create($validateFields);

        if ($message) {
            return back()->withSuccess("Your message have been sent");;
        }
        return back()->withErrors([
            'formError' => 'An error occurred'
        ]);
    }
}
