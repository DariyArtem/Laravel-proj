<?php


namespace App\Http\Services;
use App\Http\Repositories\MessageRepository;
use Illuminate\Support\Facades\Auth;

class MessageService
{
    protected $messageRepository;

    public function __construct(MessageRepository $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }

    public function save($request, $user){

        if (Auth::check()){
            $validated = $request->validate([
                "message" => "required",
            ]);

            $validated["name"] = $user->name." ".$user->surname;
            $validated["email"] = $user->email;
            $validated["number"] = $user->phone;

            return $this->messageRepository->save($validated);
        }

        $validated = $request->validate([
            "name" => "required",
            "email" => "required",
            "number" => "required",
            "message" => "required",
        ]);

        return $this->messageRepository->save($validated);
    }

    public function delete(){

    }

}
