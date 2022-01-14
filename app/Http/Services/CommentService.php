<?php


namespace App\Http\Services;


use App\Http\Repositories\CommentRepository;
use Illuminate\Support\Facades\Auth;

class CommentService
{

    protected $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function save($request, $user){

        if (Auth::check()){
            $validated = $request->validate([
                "message" => "required",
                "post_id" => "required",
            ]);
            $validated["name"] = $user->name." ".$user->surname;
            $validated["email"] = $user->email;
            $validated["number"] = $user->phone;

            return $this->commentRepository->save($validated);
        }
        $validated = $request->validate([
            "name" => "required",
            "email" => "required",
            "number" => "required",
            "message" => "required",
            "post_id" => "required",
        ]);
        return $this->commentRepository->save($validated);
    }
}
