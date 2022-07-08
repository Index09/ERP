<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class test implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $username;

    public $msg;
    public $channelkey;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($username,$channelkey)
    {
        $this->username = $username;
        $this->msg  = "{$username} liked your status";
        $this->channelkey = $channelkey;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return [$this->channelkey,'test'];
    }
}