<?php

spl_autoload_register('autoload', false, true);

function autoload($class_name)
{
    $prefix = 'classes' . DIRECTORY_SEPARATOR;
    $postfix = '.php';
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class_name);
    $file = $prefix . $class . $postfix;
    //var_dump($file);
    if (file_exists($file)) {
        require_once $file;  
    }
    // $possiblePath[] = 'Fibonacci\classes\TFET\FibonacciNum\Fibonacci.php';
    // $possiblePath[] = 'Figures\classes\TFET\Figures\Base\BaseFigure.php';
    // $possiblePath[] = 'Figures\classes\TFET\Figures\Circle\CircleFigure.php';
    // $possiblePath[] = 'Figures\classes\TFET\Figures\Rectangle\RectangleFigure.php';
    // $possiblePath[] = 'Figures\classes\TFET\Figures\Pyramid\PyramidFigure.php';

    // foreach($possiblePath as $tempPath){
    //     $path = str_replace(['\\', 'file'], [DIRECTORY_SEPARATOR, $class], $tempPath);

    //     if(file_exists($path)) {
    //         require_once "$path";
    //         break;
    //     }
    // }

}
