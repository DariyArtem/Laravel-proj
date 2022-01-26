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
        $messages = [];
        $result = [
            'message' => [
                'Yor message has been sent :)'
            ],
            'status' => 200
        ];

        try {
            $this->commentService->save($request);
        } catch (\Exception $e){
            foreach ($e->errors() as $error){
                for($i=0; $i < count($error); $i++){
                    array_push($messages, $error[$i]);
                }
            }
            $result =[
                'status' => 500,
                'message' => $messages,
            ];
        }
        return response()->json($result);
    }
}
