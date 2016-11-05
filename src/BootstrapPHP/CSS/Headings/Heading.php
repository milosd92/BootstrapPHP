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
 * Class Heading
 *
 * @link http://getbootstrap.com/css/#type
 *
 * @package BootstrapPHP\CSS\Headings
 * @author Milos Danilov <milosdanilov@gmail.com>
 */
abstract class Heading
{
    protected $content;

    public function __construct($content)
    {
        $this->content = $content;
    }
}