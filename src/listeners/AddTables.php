<?php
namespace DogSports\PipeTables\listeners;

use Flarum\Event\ConfigureFormatter;
use Illuminate\Contracts\Events\Dispatcher;

class AddTables
{
    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureFormatter::class, [$this, 'addTables']);
    }
	
    /**
     * @param ConfigureFormatter $event
     */
    public function addTables(ConfigureFormatter $event)
    {
        $event->configurator->PipeTables;
    }
}