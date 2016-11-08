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


use BootstrapPHP\Components\Glyphicon;
use BootstrapPHP\Helpers\Element;

/**
 * Class Button
 *
 * Creates a Bootstrap Button
 *
 * Available properties:
 * <ul>
 *  <li>label</li>
 *  <li>style</li>
 *  <li>size</li>
 *  <li>isBlock</li>
 *  <li>isActive</li>
 *  <li>isDisabled</li>
 * </ul>
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

    /**
     * @var \BootstrapPHP\Components\Glyphicon
     */
    protected $glyphicon = null;

    protected $isBlock = false;
    protected $isActive = false;
    protected $isDisabled = false;

    public function __construct(array $options)
    {
        parent::__construct($options);

        if (!is_null($this->glyphicon)) {

            if (!$this->glyphicon instanceof Glyphicon) {
                throw new \InvalidArgumentException("Glyphicons must be instance of Glyphicon class");
            }
        }
    }

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
        return "<button type='button' class='{$this->getClasses()}' {$this->getDisabled()}>{$this->getContent()}</button>";
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

    protected function getGlyphicon()
    {
        return !is_null($this->glyphicon) ? $this->glyphicon : '';
    }

    protected function getContent()
    {
        $glyphicon = $this->getGlyphicon();

        if (!empty($glyphicon)) {
            return $glyphicon . ' ' . $this->label;
        }

        return $this->label;
    }

    protected function getClasses()
    {
        return trim("btn {$this->style} {$this->size} {$this->getBlock()} {$this->getActive()}");
    }
}