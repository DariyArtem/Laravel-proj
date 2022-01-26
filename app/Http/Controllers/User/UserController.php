<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Services\UserService;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Nette\Schema\ValidationException;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {

        return view("pages.profileSettings.index", ["result" => User::where("id", Auth::id())->get()]);
    }

    public function update(Request $request)
    {
        $messages = [];
        $result = [
            'message' => [
                'Yor message has been sent :)'
            ],
            'status' => 200
        ];
        try {

            $this->userService->updateUser($request);

        } catch (ValidationException $e) {

            foreach ($e->errors() as $error) {
                for ($i = 0; $i < count($error); $i++) {
                    array_push($messages, $error[$i]);
                }
            }

            $result = [
                'status' => 500,
                'message' => $messages,
            ];
        }

        return response()->json($result);

    }

}
