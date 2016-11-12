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


/**
 * Class ButtonToolbar
 *
 * @link http://getbootstrap.com/components/#btn-groups-toolbar
 *
 * @package BootstrapPHP\Components\ButtonGroup
 * @author Milos Danilov <milosdanilov@gmail.com>
 */
class ButtonToolbar
{
    protected $buttonGroups = array();

    public function __construct(array $buttonGroups)
    {
        $this->buttonGroups = $buttonGroups;
    }

    public function __toString()
    {
        return "<div class='btn-toolbar' role='toolbar'>" . implode('', $this->buttonGroups) . "</div>";
    }
}