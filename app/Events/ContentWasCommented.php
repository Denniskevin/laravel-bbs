<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

use App\Comment;

class ContentWasCommented extends Event
{
    use SerializesModels;

    /**
     *
     */
    public $Comment;

    /**
     *
     */
    public $Entity;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Comment $Entity)
    {
        $this->Entity = $Entity;
        $this->userId = $Entity->entity->user_id;
        $this->typeId = $Entity->entity->type_id;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
