<?php
/*
 * This file is part of the BootstrapPHP package.
 *
 * (c) Milos Danilov <milosdanilov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BootstrapPHP\Components\Dropdown;

/**
 * Class Divider
 *
 * Add a divider to separate series of links in a dropdown menu.
 *
 * @link http://getbootstrap.com/components/#dropdowns-divider
 *
 * @package BootstrapPHP\Helpers
 * @author Milos Danilov <milosdanilov@gmail.com>
 */
class DropdownDivider
{
    public function __toString()
    {
        return "<li role='separator' class='divider'></li>";
    }
}