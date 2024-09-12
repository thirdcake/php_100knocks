<?php

echo 'input number: ';
$num = trim(fgets(STDIN));

if ($num < 1) {
    echo 'factorial = 1'.PHP_EOL;
} else {
    echo 'factorial = ';
    echo array_reduce(range(1,$num), fn($c,$i)=>($c * $i), 1);
    echo PHP_EOL;
}

