<?php
require_once '../autoloader.php';
use TFET\Figures\Circle\CircleFigure;

$f = new CircleFigure(13);
$r = $f->ShowInfo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?= $r; ?>
</body>
</html>