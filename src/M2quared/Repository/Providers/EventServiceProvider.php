<?php

namespace M2quared\Repository\Providers;

use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'M2quared\Repository\Events\RepositoryEntityCreated' => [
            'M2quared\Repository\Listeners\CleanCacheRepository',
        ],
        'M2quared\Repository\Events\RepositoryEntityUpdated' => [
            'M2quared\Repository\Listeners\CleanCacheRepository',
        ],
        'M2quared\Repository\Events\RepositoryEntityDeleted' => [
            'M2quared\Repository\Listeners\CleanCacheRepository',
        ],
    ];

    /**
     * Register the application's event listeners.
     *
     * @return void
     */
    public function boot()
    {
        $events = app('events');

        foreach ($this->listen as $event => $listeners) {
            foreach ($listeners as $listener) {
                $events->listen($event, $listener);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        //
    }

    /**
     * Get the events and handlers.
     *
     * @return array
     */
    public function listens()
    {
        return $this->listen;
    }
}
