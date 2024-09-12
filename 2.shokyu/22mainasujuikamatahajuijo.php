<?php

echo 'input number: ';
$num = (int) trim(fgets(STDIN));
if ($num <= -10 || 10 <= $num ){
    echo 'OK'.PHP_EOL;
}
