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
 * Class DropdownHeader
 *
 * Creates a header in dropdown list.
 *
 * @package BootstrapPHP\Components\Dropdown
 * @author Milos Danilov <milosdanilov@gmail.com>
 */
class DropdownHeader
{
    protected $header;

    public function __construct($header)
    {
        $this->header = $header;
    }

    public function __toString()
    {
        return "<li class='dropdown-header'>{$this->header}</li>";
    }
}