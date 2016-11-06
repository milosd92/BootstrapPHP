<?php
/*
 * This file is part of the BootstrapPHP package.
 *
 * (c) Milos Danilov <milosdanilov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BootstrapPHP\CSS\Tables;


class Table
{
    protected $header = array();
    protected $body = array();
    protected $footer = array();

    public function __construct(array $header, array $body, array $footer)
    {
        $this->header = $header;
        $this->body = $body;
        $this->footer = $footer;
    }

    public function render()
    {
        echo "<table class=\"table\"></table>";
    }
}