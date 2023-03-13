<?php

$sautDeLigne = "\n";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 === 0) {
        echo "FizzBuzz $sautDeLigne";
    } else if ($i % 3 === 0) {
        echo "Fizz $sautDeLigne";
    } else if ($i % 5 === 0) {
        echo "Buzz $sautDeLigne";
    } else {
        echo $i . " $sautDeLigne";
    }
}
