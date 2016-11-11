<?php
/*
 * This file is part of the BootstrapPHP package.
 *
 * (c) Milos Danilov <milosdanilov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BootstrapPHP\Helpers;

/**
 * Class Divider
 *
 * Creates a divider / separator.
 *
 * @package BootstrapPHP\Helpers
 * @author Milos Danilov <milosdanilov@gmail.com>
 */
class Divider
{
    public function __toString()
    {
        return "<li role='separator' class='divider'></li>";
    }
}