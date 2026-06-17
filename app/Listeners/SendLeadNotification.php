<?php

namespace App\Listeners;

use App\Events\LeadSubmitted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendLeadNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(LeadSubmitted $event): void
    {
        Log::info('Lead submitted', [
            'type' => $event->type,
            'record_id' => $event->recordId,
            'email' => $event->email,
        ]);
    }
}
