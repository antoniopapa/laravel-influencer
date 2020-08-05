<?php

namespace App\Providers;

use App\Events\AdminAddedEvent;
use App\Events\OrderCompletedEvent;
use App\Events\ProductUpdatedEvent;
use App\Listeners\NotifyAddedAdminListener;
use App\Listeners\NotifyAdminLister;
use App\Listeners\NotifyInfluencerListener;
use App\Listeners\ProductCacheFlush;
use App\Listeners\UpdateRankingsListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        OrderCompletedEvent::class => [
            NotifyAdminLister::class,
            NotifyInfluencerListener::class,
            UpdateRankingsListener::class
        ],
        AdminAddedEvent::class => [
            NotifyAddedAdminListener::class,
        ],
        ProductUpdatedEvent::class => [
            ProductCacheFlush::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        //
    }
}
