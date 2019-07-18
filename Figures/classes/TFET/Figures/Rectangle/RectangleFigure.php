<?php

namespace TFET\Figures\Rectangle;

use TFET\Figures\Base\BaseFigure;

class RectangleFigure extends BaseFigure
{
    public $a, $b, $c, $d;

    public function __construct($sideA, $sideB)
    {
        $this->a = $sideA;
        $this->b = $sideB;

        $this->c = $sideA;
        $this->d = $sideB;
        parent::class;
    }

    public function Area()
    {
        $result = $this->a * $this->b;
        return round($result, 2);
    }

    public function Perimeter()
    {
       return ($this->a + $this->b) * 2;
    }

    public function ShowParams($is_array = false)
    {
        $result = array(
            "name" => "Прямоугольник",
            "sides" => array("a" => $this->a, "b" => $this->b, "c" => $this->c, "d" => $this->d),
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