<?php

echo 'input number: ';
$num = (int) trim(fgets(STDIN));
if (-10 <= $num && $num < 0) {
    echo 'OK';
} elseif (10 <= $num) {
    echo 'OK';
} else {
    echo 'NG';
}
echo PHP_EOL;

