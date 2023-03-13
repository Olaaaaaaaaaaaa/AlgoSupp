<?php

function Fibonacci($n)
{
    if ($n == 0) {
        return 0;
    }
    if ($n == 1) {
        return 1;
    }

    $n = Fibonacci($n - 1) + Fibonacci($n - 2);
    return $n;
}

var_dump(Fibonacci(7));
