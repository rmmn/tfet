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
}
