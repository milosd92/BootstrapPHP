<?php
/*
 * This file is part of the BootstrapPHP package.
 *
 * (c) Milos Danilov <milosdanilov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BootstrapPHP\CSS\Images;


use BootstrapPHP\Helpers\Element;

/**
 * Creates a Image
 *
 * Available properties:
 * <ul>
 * <li>src</li>
 * <li>alt</li>
 * <li>shape</li>
 * <li>isResponsive</li>
 * </ul>
 *
 * @package BootstrapPHP\CSS\Images
 * @author Milos Danilov <milosdanilov@gmail.com>
 */
class Image extends Element
{
    const RESPONSIVE = 'img-responsive';

    protected $src = '';
    protected $alt = '';
    protected $shape = '';

    protected $isResponsive = false;

    protected function getResponsive()
    {
        return $this->isResponsive ? self::RESPONSIVE : '';
    }

    public function __toString()
    {
        return "<img src='{$this->src}' class='{$this->getResponsive()} {$this->shape}' alt='{$this->alt}'>";
    }
}