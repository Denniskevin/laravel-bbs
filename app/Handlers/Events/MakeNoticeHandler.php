<?php

namespace App\Handlers\Events;

use App\Events\ContentWasCommented;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Notice;

class MakeNoticeHandler
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ContentWasCommented  $event
     * @return void
     */
    public function handle($event)
    {
        $Notice = new Notice;
        $Notice->user_id        =       $event->userId;
        $Notice->offer_user_id  =       $event->Entity->user_id;
        $Notice->type_id        =       $event->typeId;
        $Notice->entity_id      =       $event->Entity->id;
        $Notice->save();
    }
}
