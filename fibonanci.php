<?php

$n = 10;

var_dump(fibonacci($n));

function fibonacci($n)
{
    $fib = [0, 1];
    for ($i = 2; $i <= $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return array_slice($fib, 0, $n);
}
