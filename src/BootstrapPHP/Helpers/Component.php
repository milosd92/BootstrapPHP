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


abstract class Component
{
    /**
     * OptionsParser constructor.
     *
     * @param array $options
     */
    public function __construct(array $options)
    {
        foreach ($options as $opt => $value) {

            if (!$this->isOptionSupported($opt)) {
                continue;
            }

            $this->{$opt} = $value;
        }
    }

    protected function isOptionSupported($option)
    {
        return in_array($option, $this->getOptions());
    }

    abstract function getOptions();
}