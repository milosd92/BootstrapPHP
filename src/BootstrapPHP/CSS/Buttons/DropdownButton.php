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


use BootstrapPHP\Helpers\Caret;

class DropdownButton extends Button
{
    /**
     * @var \BootstrapPHP\Helpers\Caret
     */
    protected $caret = null;

    public function addCaret()
    {
        $this->caret = new Caret();
    }

    protected function getCaret()
    {
        return !is_null($this->caret) ? $this->caret : '';
    }

    protected function getContent()
    {
        return trim($this->getGlyphicon() . ' ' . $this->label . ' ' . $this->getCaret());
    }

    public function __toString()
    {
        return "<button type='button'
                        class='{$this->getClasses()} dropdown-toggle'
                        data-toggle='dropdown'
                        aria-haspopup='true'
                        {$this->getDisabled()}>{$this->getContent()}</button>";
    }
}