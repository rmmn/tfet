<?php

namespace TFET\Figures\Base;

abstract class BaseFigure
{

    public abstract function Area();
    public abstract function Perimeter();
    public abstract function ShapeName();

    public function ShowInfo()
    {
        return "Фигура: " . $this->ShapeName() . ", \n Периметр: " . $this->Perimeter() . ", \n Площадь: " . $this->Area();
    }

    public function ShapeParams()
    {
        $result = array();

        if($this->ShapeName() == "Круг"){
            $result = array(
                "name" => $this->ShapeName(),
                "radius" => null,
                "perimeter" => $this->Perimeter(),
                "area" => $this->Area()
            );
        } else {
            $result = array(
                "name" => $this->ShapeName(),
                "sides" => null,
                "perimeter" => $this->Perimeter(),
                "area" => $this->Area()
            );
        }

        return json_encode($result);
    }
}
