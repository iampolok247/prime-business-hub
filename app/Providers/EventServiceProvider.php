<?php

namespace App\Providers;

use App\Events\LeadSubmitted;
use App\Listeners\SendLeadNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        LeadSubmitted::class => [
            SendLeadNotification::class,
        ],
    ];
}
