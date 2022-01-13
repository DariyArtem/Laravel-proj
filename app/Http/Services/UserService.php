<?php


namespace App\Http\Services;


use App\Http\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function saveUser($data){

        $validated = Validator::make($data, [
            "email" => "required|string|email|max:100|unique:users,email",
            "password" => ["required", Password::min(8)->numbers()->mixedCase()],
            "name" => "required|string|max:50|min:3",
            "phone" => "required|string|max:12|min:9",
            "surname" => "required|string|max:50|min:3",
            "country" => "required|string",
            "region" => "required|string",
            "city" => "required|string",
        ], [
            "email.unique" => "User with this email already exists"
        ])->validate();

        return $this->userRepository->save($validated);

    }
}
