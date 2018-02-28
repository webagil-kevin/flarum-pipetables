<?php
namespace DogSports\PipeTables\Listener;
use Flarum\Event\ConfigureWebApp;
use Flarum\Event\ConfigureFormatter;
use Illuminate\Contracts\Events\Dispatcher;
class AddClientAssets
{
    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureWebApp::class, [$this, 'addAssets']);
        $events->listen(ConfigureFormatter::class, [$this, 'addFormatter']);
    }
    /**
     * @param ConfigureWebApp $event
     */
    public function addAssets(ConfigureWebApp $event)
    {
        if($event->isForum())
        {
            $event->addAssets([__DIR__.'/../../less/forum/extension.less']);
            $event->addBootstrapper('dogsports/flarum-ext-pipetables/main');
        }
    }
    /**
     * @param ConfigureFormatter $event
     */

    public function addFormatter(ConfigureFormatter $event)
    {
        $event->configurator->PipeTables;
    }
}
