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

    protected $label = '';
    protected $style = ButtonStyle::NORMAL;
    protected $size = ButtonSize::NORMAL;
    protected $block = '';

    protected $isBlock = false;

    public function __construct(array $options)
    {
        parent::__construct($options);

        $this->block = $this->isBlock ? self::BLOCK : '';
    }

    public function __toString()
    {
        return "<button type='button' class=\"btn {$this->style} {$this->size} {$this->block}\">{$this->label}</button>";
    }
}