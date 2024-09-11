<?php

echo 'input number: ';
$num = (int) trim(fgets(STDIN));
$array = array_fill(0, 10, $num);
foreach($array as $i) {
    echo (string) $i;
    echo PHP_EOL;
}

