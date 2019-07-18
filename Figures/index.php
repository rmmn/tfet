<?php
require_once '../autoloader.php';

use TFET\Figures\Circle\CircleFigure;
use TFET\Figures\Pyramid\PyramidFigure;
use TFET\Figures\Rectangle\RectangleFigure;
use TFET\Figures\Base\RandomFigure;
use TFET\Figures\Base\StorageFigure;

$circleClass = new CircleFigure(13);
$circle = $circleClass->ShowParams(true);

$pyramidClass = new PyramidFigure(15, 12, 12);
$pyramid = $pyramidClass->ShowParams(true);

$rectangleClass = new RectangleFigure(4, 3);
$rectangle = $rectangleClass->ShowParams(true);

$randClass = RandomFigure::RandClass('CircleFigure', 'PyramidFigure', 'RectangleFigure');
$random = $randClass->ShowParams(true);

$storage = new StorageFigure(
    [
        $rectangleClass->ShowParams(true),
        $pyramidClass->ShowParams(true),
        $circleClass->ShowParams(true)       
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

        html {
            width: 100%;
        }

        body {
            background-color: #fcfcfc;
            display: flex;
            width: 100%;
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
            min-height: 200px;
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

        .item div {
            display: flex;
            flex-flow: column nowrap
        }
    </style>
</head>

<body>
    <div class="conteiner">
        <div class="item">
            <div>
                <span><strong>Фигура: </strong> <?= $circle['name']; ?></span>
                <span><strong>Радиус: </strong> <?= $circle['radius']; ?></span>
                <span><strong>Площадь: </strong> <?= $circle['area']; ?></span>
                <span><strong>Периметр: </strong> <?= $circle['perimeter']; ?></span>
            </div>
        </div>

        <div class="item">
            <div>
                <span><strong>Фигура: </strong> <?= $pyramid['name']; ?></span>
                <span><strong>Стороны: </strong> A: <?= $pyramid['sides']['a']; ?>, B: <?= $pyramid['sides']['b']; ?>, C: <?= $pyramid['sides']['c']; ?></span>
                <span><strong>Площадь: </strong> <?= $pyramid['area']; ?></span>
                <span><strong>Периметр: </strong> <?= $pyramid['perimeter']; ?></span>
            </div>
        </div>

        <div class="item">
            <div>
                <span><strong>Фигура: </strong> <?= $rectangle['name']; ?></span>
                <span><strong>Стороны: </strong> A: <?= $rectangle['sides']['a']; ?>, B: <?= $rectangle['sides']['b']; ?>, C: <?= $rectangle['sides']['c']; ?>, D: <?= $rectangle['sides']['d']; ?></span>
                <span><strong>Площадь: </strong> <?= $rectangle['area']; ?></span>
                <span><strong>Периметр: </strong> <?= $rectangle['perimeter']; ?></span>
            </div>
        </div>

        <div class="item">
            <h3>Рандом:</h3>
            <div>
                <?php if ($randClass instanceof RectangleFigure) : ?>

                    <span><strong>Фигура: </strong> <?= $random['name']; ?></span>
                    <span><strong>Стороны: </strong> A: <?= $random['sides']['a']; ?>, B: <?= $random['sides']['b']; ?>, C: <?= $random['sides']['c']; ?>, D: <?= $random['sides']['d']; ?></span>
                    <span><strong>Площадь: </strong> <?= $random['area']; ?></span>
                    <span><strong>Периметр: </strong> <?= $random['perimeter']; ?></span>

                <?php elseif ($randClass instanceof PyramidFigure) : ?>

                    <span><strong>Фигура: </strong> <?= $random['name']; ?></span>
                    <span><strong>Стороны: </strong> A: <?= $random['sides']['a']; ?>, B: <?= $random['sides']['b']; ?>, C: <?= $random['sides']['c']; ?></span>
                    <span><strong>Площадь: </strong> <?= $random['area']; ?></span>
                    <span><strong>Периметр: </strong> <?= $random['perimeter']; ?></span>

                <?php else : ?>

                    <span><strong>Фигура: </strong> <?= $random['name']; ?></span>
                    <span><strong>Радиус: </strong> <?= $random['radius']; ?></span>
                    <span><strong>Площадь: </strong> <?= $random['area']; ?></span>
                    <span><strong>Периметр: </strong> <?= $random['perimeter']; ?></span>

                <?php endif; ?>
            </div>
        </div>

        <div class="item">
            <h3>Данные для сохранения:</h3>
            <p class="break">
                <?= html_entity_decode(str_replace('\u', '&#x', $storage->Show()), ENT_NOQUOTES, 'UTF-8'); ?>
            </p>
        </div>

        <div class="item">
            <h3>Данные из файла:</h3>
            <p class="break">
            <?= html_entity_decode(str_replace('\u', '&#x', $storage->Read()), ENT_NOQUOTES, 'UTF-8'); ?>
            </p>
        </div>

        <div class="item">
            <h3>Отсортированные данные:</h3>
            <p class="break">
            <?= html_entity_decode(str_replace('\u', '&#x', json_encode($arr)), ENT_NOQUOTES, 'UTF-8'); ?>
            </p>
        </div>
    </div>
</body>

</html>