<?php
echo 'input number: ';
$num = (int) trim(fgets(STDIN));
if (5 < $num && $num < 20) {
    echo 'OK'.PHP_EOL;
}
