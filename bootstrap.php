<?php

/**
* @package   dogsports\pipetables
* @copyright Copyright (c) 2018 The kevin PAULMIER Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace dogsports\Flarum\PipeTables;

use Flarum\Event\ConfigureFormatter;
use Illuminate\Events\Dispatcher;

function subscribe(Dispatcher $events)
{
	$events->listen(
		ConfigureFormatter::class,
		function (ConfigureFormatter $event)
		{
			$event->configurator->PipeTables;
		}
	);
};

return __NAMESPACE__ . '\\subscribe';
