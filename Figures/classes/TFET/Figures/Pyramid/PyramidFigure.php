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
        $halfPerimeter = ($this->a + $this->b + $this->c) / 2;
        $result = sqrt(
            $halfPerimeter * 
            ($halfPerimeter - $this->a) * 
            ($halfPerimeter - $this->b) * 
            ($halfPerimeter - $this->c)
        );
        return round($result, 2);
    }

    public function Perimeter()
    {
       return $this->a + $this->b + $this->c;
    }

    public function ShapeParams()
    {
        $result = array(
            "name" => $this->ShapeName(),
            "sides" => array("a" => $this->a, "b" => $this->b, "c" => $this->c),
            "perimeter" => $this->Perimeter(),
            "area" => $this->Area()
        );
        return json_encode($result);
    }

    public function ShapeName()
    {
        return "Треугольник";
    }

    public function ShowInfo()
    {
        return "Фигура: " . $this->ShapeName() . ", Сторона A: " . $this->a . ", Сторона B: " . $this->b . ", Сторона C: " . $this->c .  ", \n Периметр: " . $this->Perimeter() . ", \n Площадь: " . $this->Area();
    }
    
}