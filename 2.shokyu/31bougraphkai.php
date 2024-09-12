<?php

echo 'input number: ';
$num = trim(fgets(STDIN));
if ($num < 1) {
    exit;
}

echo array_reduce(range(1, $num), function($c, $i){
    $c .= '*';
    if ((int)$i % 5 === 0) {
        $c .= ' ';
    }
    return $c;
}, '');
echo PHP_EOL;

