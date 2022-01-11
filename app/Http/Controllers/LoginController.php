<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("pages.login.index");
    }

    public function login(Request $request)
    {

        $formFields = $request->only(["email", "password"]);
        if (Auth::attempt($formFields)) {
            return redirect()->intended(route("private"));
        }

        return redirect(route("login"))->withErrors([
            "formMessage" => "Email or password is incorrect"
        ]);

    }

}
