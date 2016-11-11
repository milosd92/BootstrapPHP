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


use BootstrapPHP\CSS\Buttons\Button;
use BootstrapPHP\CSS\Buttons\DropdownButton;
use BootstrapPHP\Helpers\Component;

/**
 * Class Dropdown
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
            'list'
        ];
    }

    public function getButton()
    {
        return $this->button;
    }

    protected function getList()
    {
        $unordered_list = '';

        foreach ($this->list as $item) {
            $unordered_list .= "<li>{$item}</li>";
        }

        return "<ul class=\"dropdown-menu\">{$unordered_list}</ul>";
    }

    public function __toString()
    {
        return "<div class=\"dropdown\">{$this->getButton()}{$this->getList()}</div>";
    }
}