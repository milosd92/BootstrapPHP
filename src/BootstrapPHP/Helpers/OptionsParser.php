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
 * Class OptionsParser
 *
 * Parser for converting array of options (name, value pairs)
 *  to object attributes for the class that uses this trait.
 *
 * @package BootstrapPHP\Helpers
 * @author Milos Danilov <milosdanilov@gmail.com>
 */
trait OptionsParser
{
    /**
     * OptionsParser constructor.
     * @param array $options
     */
    public function __construct(array $options)
    {
        foreach ($options as $name => $value) {
            $this->{$name} = $value;
        }
    }
}