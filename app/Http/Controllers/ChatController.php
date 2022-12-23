<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSend;
use App\Models\Chat;


class ChatController extends Controller
{
    public function index(Request $request)
        {
            $request->validate([
                "user_id" => "required|exists:users,id",
                "stream_id" => "required|exists:streams,id",
                "message"=>"string|required"
            ]);
       
            event(new MessageSend($request->message,$request->stream_id,$request->user_id));
            Chat::create($request->all());
            
            return response()->json(['Чат получен']);
    }
}
