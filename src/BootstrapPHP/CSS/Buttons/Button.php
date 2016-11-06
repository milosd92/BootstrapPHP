<?php
/*
 * This file is part of the BootstrapPHP package.
 *
 * (c) Milos Danilov <milosdanilov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BootstrapPHP\CSS\Buttons;


use BootstrapPHP\Helpers\OptionsParser;

/**
 * Class Button
 *
 * @link http://getbootstrap.com/css/#buttons
 *
 * @package BootstrapPHP\CSS\Buttons
 * @author Milos Danilov <milosdanilov@gmail.com>
 */
class Button
{
    use OptionsParser;

    protected $label = '';
    protected $style = ButtonStyle::NORMAL;
    protected $size = ButtonSize::NORMAL;

    public function __toString()
    {
        return "<button type='button' class=\"btn {$this->style} {$this->size}\">{$this->label}</button>";
    }
}