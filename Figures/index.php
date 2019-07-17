<?php
require_once '../autoloader.php';

use TFET\Figures\Circle\CircleFigure;
use TFET\Figures\Pyramid\PyramidFigure;
use TFET\Figures\Rectangle\RectangleFigure;
use TFET\Figures\Base\RandomFigure;
use TFET\Figures\Base\StorageFigure;
use TFET\Figures\Base\SortFigures;

$circleClass = new CircleFigure(13);
$circle = $circleClass->ShowInfo();

$pyramidClass = new PyramidFigure(15, 12, 12);
$pyramid = $pyramidClass->ShowInfo();

$rectangleClass = new RectangleFigure(4, 3);
$rectangle = $rectangleClass->ShowInfo();

$randCls = RandomFigure::RandClass('CircleFigure', 'PyramidFigure', 'RectangleFigure');

$storage = new StorageFigure(
    [
        $circleClass->ShapeParams(),
        $pyramidClass->ShapeParams(),
        $rectangleClass->ShapeParams()
    ],
    "figures.json"
);

$json = $storage->Show();
$storage->Save();

$arr = json_decode($storage->Read());
usort($arr, function ($a, $b) {
    $a1 = $a->area;
    $b1 = $b->area;
    return $a1 == $b1 ? 0 : ($a1 > $b1 ? 1 : -1);
});
$arr = array_reverse($arr);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Фигуры</title>
    <style>
        * {
            padding: 0;
            margin: 0 auto;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #fcfcfc;
            display: flex;
            min-width: 100vw;
            min-height: 100vh;
            align-items: center;
            justify-content: center;
            flex-flow: row wrap
        }

        .conteiner {
            max-width: 900px;
            width: 100%;
            margin: 0 auto;
            padding: 20px 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-flow: row wrap
        }

        .item {
            width: 320px;
            height: 200px;
            background-color: #f4f4f4;
            margin: 3px;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-flow: row wrap
        }

        .item h3,
        .item p {
            text-align: center;
            margin-bottom: 7px;
            word-wrap: normal;
        }

        .item p.break {
            word-break: break-all;
        }
    </style>
</head>

<body>
    <div class="conteiner">
        <div class="item">
            <h3>Круг:</h3>
            <p><?= $circle; ?></p>
        </div>

        <div class="item">
            <h3>Треугольник:</h3>
            <p><?= $pyramid; ?></p>
        </div>

        <div class="item">
            <h3>Прямоугольник:</h3>
            <p><?= $rectangle; ?></p>
        </div>

        <div class="item">
            <h3>Рандом:</h3>
            <p><?= $randCls->ShowInfo(); ?></p>
        </div>

        <div class="item">
            <h3>Данные для сохранения:</h3>
            <p class="break"><?= $storage->Show(); ?></p>
        </div>

        <div class="item">
            <h3>Данные из файла:</h3>
            <p class="break"><?= $storage->Read(); ?></p>
        </div>

        <div class="item">
            <h3>Отсортированные данные:</h3>
            <p class="break"><?= json_encode($arr); ?></p>
        </div>
    </div>
</body>

</html>