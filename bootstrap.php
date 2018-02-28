<?php
/**
* @package   dogsports\pipetables
* @copyright Copyright (c) 2018 The kevin PAULMIER Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace DogSports\PipeTables;
use Illuminate\Contracts\Events\Dispatcher;
return function (Dispatcher $events) {
    $events->subscribe(Listener\AddClientAssets::class);
};
