<?php
/*
 * This file is part of the BootstrapPHP package.
 *
 * (c) Milos Danilov <milosdanilov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BootstrapPHP\Components\ButtonGroup;


use MyCLabs\Enum\Enum;


/**
 * Class ButtonGroupSize
 *
 * @method static ButtonGroupSize NORMAL()
 * @method static ButtonGroupSize LARGE()
 * @method static ButtonGroupSize SMALL()
 * @method static ButtonGroupSize EXSTRA_SMALL()
 *
 * @package BootstrapPHP\Components\ButtonGroup
 * @author Milos Danilov <milosdanilov@gmail.com>
 */
class ButtonGroupSize extends Enum
{
    const NORMAL = '';
    const LARGE = 'btn-group-lg';
    const SMALL = 'btn-group-sm';
    const EXTRA_SMALL = 'btn-group-xs';
}