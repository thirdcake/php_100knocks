<?php

echo 'input number: ';
$num = (int) trim(fgets(STDIN));

$e = [$num, $num + 1];

foreach(range(1, 9) as $val) {
    if (!in_array($val, $e)) {
        echo (string) $val .PHP_EOL;
    }
}
