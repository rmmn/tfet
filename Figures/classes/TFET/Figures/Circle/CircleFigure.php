<?php

namespace TFET\Figures\Circle;

use TFET\Figures\Base\BaseFigure;

class CircleFigure extends BaseFigure
{
    private $_rad = 0;
    private $pi = 3.14;
    public function __construct($radius = 10)
    {
        $this->_rad = $radius;
        parent::class;
    }

    public function Area()
    {
        return round($this->pi * pow($this->_rad, 2), 2);
    }

    public function Perimeter()
    {
        return round(($this->pi * 2) * $this->_rad, 2);
    }

    public function ShowParams($is_array = false)
    {
        $result = array(
            "name" => "Круг",
            "radius" => $this->_rad,
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
