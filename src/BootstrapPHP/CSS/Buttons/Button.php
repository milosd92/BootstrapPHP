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


use BootstrapPHP\Helpers\Element;

/**
 * Class Button
 *
 * @link http://getbootstrap.com/css/#buttons
 *
 * @package BootstrapPHP\CSS\Buttons
 * @author Milos Danilov <milosdanilov@gmail.com>
 */
class Button extends Element
{
    const BLOCK = 'btn-block';
    const ACTIVE = 'active';

    protected $label = '';
    protected $style = ButtonStyle::NORMAL;
    protected $size = ButtonSize::NORMAL;

    protected $isBlock = false;
    protected $isActive = false;
    protected $isDisabled = false;

    public function setActive($active = true)
    {
        $this->isActive = $active;
    }

    public function setDisabled($disabled = true)
    {
        $this->isDisabled = $disabled;
    }

    public function __toString()
    {
        return "<button type='button' class=\"btn {$this->style} {$this->size} {$this->getBlock()} {$this->getActive()}\" {$this->getDisabled()}>{$this->label}</button>";
    }

    protected function getActive()
    {
        return $this->isActive ? self::ACTIVE : '';
    }

    protected function getDisabled()
    {
        return $this->isDisabled ? 'disabled="disabled"' : '';
    }

    protected function getBlock()
    {
        return $this->isBlock ? self::BLOCK : '';
    }
}