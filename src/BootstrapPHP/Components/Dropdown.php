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

    protected $buttonLabel = '';

    /**
     * @var \BootstrapPHP\CSS\Buttons\Button
     */
    protected $button = null;

    public function __construct(array $options)
    {
        parent::__construct($options);

        $this->button = new Button([
            'label' => $this->buttonLabel
        ]);

        $this->button->addCaret();
    }

    public function getOptions()
    {
        return [
            'buttonLabel'
        ];
    }

    public function getButton()
    {
        return $this->button;
    }

    protected function getList()
    {
        return "<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                    <li><a href=\"#\">Action</a></li>
                    <li><a href=\"#\">Another action</a></li>
                    <li><a href=\"#\">Something else here</a></li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"#\">Separated link</a></li>
                  </ul>";
    }

    public function __toString()
    {
        return "<div class=\"dropdown\">{$this->getButton()}{$this->getList()}</div>";
    }
}