<?php
/*
 * This file is part of the BootstrapPHP package.
 *
 * (c) Milos Danilov <milosdanilov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BootstrapPHP\Components;


use BootstrapPHP\Components\Dropdown\DropdownDirection;
use BootstrapPHP\CSS\Buttons\DropdownButton;
use BootstrapPHP\Helpers\Component;

/**
 * Class Dropdown
 *
 * Creates a Bootstrap Dropdown
 *
 * Available properties:
 * <ul>
 *  <li>label</li>
 *  <li>list</li>
 * </ul>
 *
 * @link http://getbootstrap.com/components/#dropdowns
 *
 * @package BootstrapPHP\Components
 * @author Milos Danilov <milosdanilov@gmail.com>
 */
class Dropdown extends Component
{

    protected $label = '';
    protected $list = array();
    protected $direction = DropdownDirection::DOWN;

    /**
     * @var \BootstrapPHP\CSS\Buttons\DropdownButton
     */
    protected $button = null;

    public function __construct(array $options)
    {
        parent::__construct($options);

        $this->button = new DropdownButton([
            'label' => $this->label
        ]);

        $this->button->addCaret();
    }

    public function getOptions()
    {
        return [
            'label',
            'list',
            'direction'
        ];
    }

    public function getButton()
    {
        return $this->button;
    }

    protected function getList()
    {
        return $this->list;
    }

    protected function getDirection()
    {
        return !empty($this->direction) ? $this->direction : DropdownDirection::DOWN;
    }

    public function __toString()
    {
        return "<div class='{$this->getDirection()}'>{$this->getButton()}{$this->getList()}</div>";
    }
}