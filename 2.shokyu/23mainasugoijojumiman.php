<?php

echo 'input number: ';
$num = (int) trim(fgets(STDIN));
if (-5 <= $num && $num < 10) {
    echo 'OK'.PHP_EOL;
}else {
    echo 'NG'.PHP_EOL;
}

