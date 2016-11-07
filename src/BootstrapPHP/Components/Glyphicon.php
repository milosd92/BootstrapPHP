<?php
/*
 * This file is part of the BootstrapPHP package.
 *
 * (c) Milos Danilov <milosdanilov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BootstrapPHP\Components;

/**
 * Creates a Glyphicon
 *
 * @link http://getbootstrap.com/components/#glyphicons
 *
 * @package BootstrapPHP\Components
 * @author Milos Danilov <milosdanilov@gmail.com>
 */
class Glyphicon
{
    protected $glyphicon = '';

    public function __construct($glyphicon)
    {
        $this->glyphicon = $glyphicon;
    }

    public function __toString()
    {
        return "<span class='glyphicon {$this->glyphicon}'></span>";
    }
}