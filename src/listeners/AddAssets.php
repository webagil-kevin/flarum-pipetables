<?php
namespace DogSports\PipeTables\Listeners;
use Flarum\Event\ConfigureWebApp;
use Flarum\Event\ConfigureFormatter;
use Illuminate\Contracts\Events\Dispatcher;
class AddAssets
{
    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureWebApp::class, [$this, 'configAssets']);
        $events->listen(ConfigureFormatter::class, [$this, 'configFormatter']);
    }
    /**
     * @param ConfigureWebApp $event
     */
    public function configAssets(ConfigureWebApp $event)
    {
        if($event->isForum())
        {
            $event->addAssets([
                __DIR__.'/../../less/forum/extension.less'
            ]);
            $event->addBootstrapper('dogsports/flarum-ext-pipetables/main');
        }
    }
    /**
     * @param ConfigureFormatter $event
     */
    public function configFormatter(ConfigureFormatter $event)
    {
        $event->configurator->PipeTables;
    }
}
