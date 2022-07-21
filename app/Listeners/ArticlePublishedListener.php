<?php

namespace App\Listeners;

use App\Events\ArticlePublishedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class ArticlePublishedListener
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
     * @param  \App\Events\ArticlePublishedEvent  $event
     * @return void
     */
    public function handle(ArticlePublishedEvent $event)
    {
        Log::info("Event handler work fine");
        Log::info($event->article->title);
    }
}
