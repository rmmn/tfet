<?php

namespace TFET\Figures\Base;

abstract class BaseFigure
{

    public abstract function Area();
    public abstract function Perimeter();

    public function ShowParams($is_array = false)
    {
        return null;
    }
}
