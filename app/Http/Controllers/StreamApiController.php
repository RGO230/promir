<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StreamUser;
use App\Models\Stream;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class StreamApiController extends Controller
{
    public function sendInvite(Request $request){
        // $streamtoken = Stream::Where('id', $stream->stream_id)->get();
        $stream = $request->stream_id;
        $user = User::whereHas('streams',function($q)use($stream){
            $q->where('stream_id',$stream);
        })->get();
        foreach($user as $users){
        
        
        Mail::send('emails.activation',$data, function ($message) use ($users) {
            $message->to($users->email)->subject('adadsasdsa');
            $message->from(env('MAIL_FROM_ADDRESS'), 'Чистопар');
            });
        }
        return response($users->email);
            

    }
}