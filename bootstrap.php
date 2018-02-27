<?php

/**
* @package   dogsports\pipetables
* @copyright Copyright (c) 2015-2017 The kevin PAULMIER Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace dogsports\Flarum\PipeTables;

use Flarum\Formatter\Event\Configuring;
use Illuminate\Events\Dispatcher;

function subscribe(Dispatcher $events)
{
	$events->listen(
		Configuring::class,
		function (Configuring $event)
		{
			$event->configurator->PipeTables;
		}
	);
};

return __NAMESPACE__ . '\\subscribe';