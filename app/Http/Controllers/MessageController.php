<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    public function show()
    {
        return view("Admin.pages.messages.index", ["result" => Message::all()]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        if (Auth::check()) {

            $validateFields = $request->validate([
                "message" => "required",
            ]);
            $message = Message::create(
                $validateFields + ["name" => "$user->name" . " " . "$user->surname"] + ["email" => $user->email]
                + ["number" => $user->phone]);
            if ($message) {
                return redirect(route("contact"))->withSuccess("Your message have been sent");
            }
            return redirect(route("contact"))->withErrors([
                "formError" => "An error occurred"
            ]);
        }

        $validateFields = $request->validate([
            "name" => "required",
            "email" => "required",
            "number" => "required",
            "message" => "required",
        ]);

        $message = Message::create($validateFields);

        if ($message) {
            return redirect(route("contact"))->withSuccess("Your message have been sent");
        }
        return redirect(route("contact"))->withErrors([
            "formError" => "An error occurred"
        ]);
    }

    public function delete($message_id)
    {
        $delete = Message::where("id", $message_id)->first();
        if ($delete) {
            $delete->delete();
            return redirect()->back()->withSuccess("Message $message_id have been deleted");
        }

        return redirect(route("auth.admin.messages"))->withErrors([
            "formError" => "An error occurred"
        ]);

    }
}
