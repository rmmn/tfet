<?php
require_once '../autoloader.php';

use TFET\FibonacciNum\Fibonacci;

$f = new Fibonacci();
$r = $f->fib();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Число Фибоначчи</title>
    <style>
        * {
            padding: 0;
            margin: 0 ;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #fcfcfc;
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-flow: row wrap
        }

        div {
            max-width: 600px;
            max-height: 600px
        }

        div p {
            font-size: 22px;
            font-weight: 900;
            line-height: 1.8;
        }
    </style>
</head>

<body>
    <div>
        <p><?= $r; ?></p>
    </div>

</body>

</html>