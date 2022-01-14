<?php

namespace App\Http\Controllers;

use App\Http\Services\CommentService;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    protected $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    public function store(Request $request)
    {
        try {
            $this->commentService->save($request, Auth::user());
        } catch (\Exception $e){
            return back()->withErrors([
                "formError" => "$e"
            ]);
        }
        return back()->withSuccess("Your message have been sent");
    }
}
