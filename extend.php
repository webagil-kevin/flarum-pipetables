<?php

/*
 * This file is part of kevid/flarum-pipetables.
 *
 * Copyright (c) 2019 Kevin PAULMIER.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace KevID\FlarumPipetables;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/resources/less/forum.less'),

    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->PipeTables;
        })
];
