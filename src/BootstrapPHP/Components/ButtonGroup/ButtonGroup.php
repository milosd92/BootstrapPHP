<?php
/*
 * This file is part of the BootstrapPHP package.
 *
 * (c) Milos Danilov <milosdanilov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BootstrapPHP\Components\ButtonGroup;


use BootstrapPHP\CSS\Buttons\Button;
use BootstrapPHP\CSS\Buttons\ButtonSize;
use BootstrapPHP\Helpers\Component;

/**
 * Class ButtonGroup
 *
 * Group a series of buttons together on a single line with the button group.
 *
 * @link http://getbootstrap.com/components/#btn-groups
 *
 * @package BootstrapPHP\Components\ButtonGroup
 * @author Milos Danilov <milosdanilov@gmail.com>
 */
class ButtonGroup extends Component
{
    protected $buttons = array();
    protected $size = ButtonSize::NORMAL;

    public function __construct(array $options)
    {
        if (!is_array($options['buttons'])) {
            throw new \InvalidArgumentException("ButtonGroup 'buttons' can accept only array of Buttons");
        }

        foreach ($options['buttons'] as $button) {
            if (!$button instanceof Button) {
                throw new \InvalidArgumentException("ButtonGroup 'buttons' can accept only instance of Button");
            }
        }

        parent::__construct($options);
    }

    public function getOptions()
    {
        return [
            'buttons',
            'size'
        ];
    }

    protected function getSize()
    {
        return $this->size;
    }

    public function __toString()
    {
        return "<div class='btn-group {$this->getSize()}' role='group'>" . implode('', $this->buttons) . "</div>";
    }
}