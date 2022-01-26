<?php

namespace App\Http\Controllers;

use App\Http\Services\MessageService;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

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
        $messages = [];
        $result = [
            'message' => [
                'Yor message has been sent :)'
            ],
            'status' => 200
        ];

        try {

            $this->messageService->save($request, Auth::user());
        } catch (ValidationException $e){
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
