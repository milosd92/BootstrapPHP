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


class DropdownMenu
{
    protected $items = array();

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function __toString()
    {
        return "<ul class='dropdown-menu'>" . implode('', $this->items) . "</ul>";
    }
}