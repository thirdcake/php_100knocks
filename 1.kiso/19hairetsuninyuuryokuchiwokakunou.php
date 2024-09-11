<?php

$array = array_fill(0, 5, null);
foreach($array as $i => $v) {
    echo 'input number: ';
    $num = (int) trim(fgets(STDIN));
    $array[$i] = $num;
}
foreach($array as $v) {
    echo (string) $v;
    echo PHP_EOL;
}

