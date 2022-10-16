<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSend;


class ChatController extends Controller
{
    public function index(Request $request)
    // {   $message=Chat::where('user_id',$request->user_id)->where('stream_id',$request->stream_id)->input()
        {
            $message = $request->input('message', '');
        if (strlen($message)) { 
            event(new MessageSend($message));
        }
    }
}
