<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{

    public function index(){
        return view('Account.register');
    }


    public function store(Request $request){

        $validateFields = $request->validate([
            'email' => 'required|string|email|max:100|unique:users,email',
            'password' => ['required',Password::min(8)->numbers()->mixedCase()],
            'name' => 'required|string|max:50|min:3',
            'phone' => 'required|string|max:12|min:9',
            'surname' => 'required|string|max:50|min:3',
            'country' => 'required|string',
            'region' => 'required|string',
            'city' => 'required|string',
        ], [
            'email.unique' => 'User with this email already exists'
        ]);


        $user = User::create($validateFields);

        if($user){
            Auth::loginUsingId($user->id);
            return redirect(route('private'));
        }

        return redirect(route('register'))->withErrors([
            'email' => 'An error occurred'
        ]);



    }
}
