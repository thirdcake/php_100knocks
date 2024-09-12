<?php

echo 'input number: ';
$num = (int) trim(fgets(STDIN));
$range = 1;
if (-10 <= $num && $num < 0) {
    $range = 2;
} elseif (0 <= $num ){
    $range = 3;
}
echo 'range '. (string) $range. PHP_EOL;

