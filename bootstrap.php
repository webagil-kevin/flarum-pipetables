<?php
namespace DogSports\PipeTables;

use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events)
{
    $events->subscribe(Listeners\AddTables::class);
    $events->subscribe(Listeners\AddClientAssets::class);
};
