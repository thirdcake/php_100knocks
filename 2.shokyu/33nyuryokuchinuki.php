<?php

echo 'input number: ';
$num = (int) trim(fgets(STDIN));
foreach(range(1, 9) as $val) {
    if ($val !== $num) {
        echo $val.PHP_EOL;
    }
}


