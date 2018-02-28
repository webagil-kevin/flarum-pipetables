<?php
namespace DogSports\PipeTables;

use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events)
{
    $events->subscribe(listeners\AddTables::class);
    $events->subscribe(listeners\AddClientAssets::class);
};
