<?php
namespace TFET\FibonacciNum;

class Fibonacci {
    public function fib ()
    {
        $f = [1, 1];
        $result = "";

        for($i = 2; $i < 64; $i++){
            $f[] = $f[$i - 1] + $f[$i - 2];
        }

        foreach($f as $r){
            $result .= $r . ", ";
        }

        return substr_replace($result, "", -1);
    }
}

