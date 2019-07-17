<?php

namespace TFET\Figures\Base;

use TFET\Figures\Circle\CircleFigure;
use TFET\Figures\Pyramid\PyramidFigure;
use TFET\Figures\Rectangle\RectangleFigure;

class RandomFigure
{

    public static function RandClass()
    {
        $result = null;
        $randRadius = rand(5, 40);

        $pA = rand(5, 35);
        $pB = rand(5, 40);
        $pC = rand(5, 45);

        $rAC = rand(5, 30);
        $rBD = rand(5, 60);

        switch (rand(0, 2)) {
            case 0:
                $result = new CircleFigure($randRadius);
                break;
            case 1:
                $result = new PyramidFigure($pA, $pB, $pC);
                break;
            case 2:
                $result = new RectangleFigure($rAC, $rBD);
                break;
        }

        return $result;
    }
}
