<?php

namespace TFET\Figures\Pyramid;

use TFET\Figures\Base\BaseFigure;

class PyramidFigure extends BaseFigure
{
    public $a, $b, $c;

    public function __construct($sideA, $sideB, $sideC)
    {
        $this->a = $sideA;
        $this->b = $sideB;
        $this->c = $sideC;
        parent::class;
    }

    public function Area()
    {
        return 3.14 * pow($this->_rad, 2);
    }

    public function Perimeter()
    {
       return (3.14 * 2) * $this->_rad;
    }

    public function ShapeName()
    {
        return "Круг";
    }
    
}