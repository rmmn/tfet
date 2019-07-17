<?php

namespace TFET\Figures\Circle;

use TFET\Figures\Base\BaseFigure;

class CircleFigure extends BaseFigure
{
    private $_rad = 0;
    private $pi = 3.14;
    public function __construct($radius = 10)
    {
        parent::class;
        $this->_rad = $radius;
    }

    public function Area()
    {
        return $this->pi * pow($this->_rad, 2);
    }

    public function Perimeter()
    {
        return ($this->pi * 2) * $this->_rad;
    }

    public function ShapeName()
    {
        return "Круг, Радиус: " . $this->_rad;
    }
}
