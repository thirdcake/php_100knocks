<?php

echo 'input number: ';
$num = (int) trim(fgets(STDIN));
if($num < 0) {
    echo 'negative'.PHP_EOL;
} else {
    for($i = 0; $i <= $num; $i++) {
        echo (string) $i;
        echo PHP_EOL;
    }
}

