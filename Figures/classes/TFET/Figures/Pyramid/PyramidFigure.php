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

    public function ShowParams($is_array = false)
    {
        $result = array(
            "name" => "Треугольник",
            "sides" => array("a" => $this->a, "b" => $this->b, "c" => $this->c),
            "perimeter" => $this->Perimeter(),
            "area" => $this->Area()
        );
        
        if($is_array){
            return $result;
        } else {
            return json_encode($result);
        }
    }  
}