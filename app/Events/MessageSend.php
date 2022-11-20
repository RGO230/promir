<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSend implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $message;
    public $stream_id;
    public $user_id;

    public function __construct($message,$stream_id,$user_id)
    {
        $this->message = $message;
        $this->stream_id = $stream_id;
        $this->user_id = $user_id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return[
            new PrivateChannel('chat-'.$this->stream_id),
            new PrivateChannel('chat-'.$this->user_id),
            new PrivateChannel('chat-'.$this->message)
        ];
    }
    public function broadcastAs()
  {
      return 'Streamchat';
  } 
}
