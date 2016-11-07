<?php
/*
 * This file is part of the BootstrapPHP package.
 *
 * (c) Milos Danilov <milosdanilov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BootstrapPHP\CSS\Headings;

/**
 * Class H1
 *
 * @package BootstrapPHP\CSS\Headings
 * @author Milos Danilov <milosdanilov@gmail.com>
 */
class H1 extends Heading
{
    public function __toString()
    {
        return "<h1>{$this->content}</h1>";
    }
}