<?php

namespace App\Http\Controllers;

use App\Http\Services\MessageService;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    protected $messageService;

    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }
    public function show()
    {
        return view("Admin.pages.messages.index", ["result" => Message::all()]);
    }

    public function store(Request $request)
    {
        try {
            $this->messageService->save($request, Auth::user());
        } catch (\Exception $e){
            return back()->withErrors([
                "formError" => "$e"
            ]);
        }
        return back()->withSuccess("Your message have been sent");
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
