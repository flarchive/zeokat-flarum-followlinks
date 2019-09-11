<?php
/*
 * This file is part of Flarum.
 *
 * The creator of flarum-followlinks is a single soul.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Zeokat\FollowAutolink;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[INTURL={URL}]{TEXT}[/INTURL]',
                '<a href="{URL}">{TEXT}</a>'
            );
            $config->BBCodes->addCustom(
                '[INTURLB={URL}]{TEXT}[/INTURLB]',
                '<a href="{URL}" target="_blank" rel="noopener">{TEXT}</a>'
            );
        })
];
