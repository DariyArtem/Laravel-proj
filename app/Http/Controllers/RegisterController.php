<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{

    protected $userService;


    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return view("pages.register.index");
    }

    public function store(Request $request)
    {
        $data = $request->only([
            "email",
            "password",
            "name",
            "phone",
            "surname",
            "country",
            "region",
            "city",
        ]);

        try {
            $this->userService->saveUser($data);
        } catch (\Exception $e){
            return redirect(route("register"))->withErrors([
                "email" => "An error occurred"
            ]);
        }
        return redirect(route("private"));

    }
}
