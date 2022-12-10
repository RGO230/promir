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
        $stream = Stream::with('token')->where('id', $request->id)->first();
        $stream_url= html_entity_decode('Приглашаем вас на прямую трансляцию <a href="'.env('FRONT_HOST').'promir/stream/'.'">'.'promir/streampage'.'?stream_id='.$stream->id.'&'.'streamtoken='.$stream->streamtoken.'</a>');
        $user = User::whereHas('streams',function($q)use($stream){
            $q->where('stream_id',$stream->id);
        })->get();
        foreach($user as $users){
        
            Mail::send([],[],function ($message) use ($users,$stream_url) {
                $message->to($users->email, 'Промир')->subject('Вы приглашены на прямую трансляцию');
                $message->from(env('MAIL_FROM_ADDRESS'), 'Промир');
                $message->setBody($stream_url, 'text/html');
                });
        
            

    }
    return response($user);   
}
}