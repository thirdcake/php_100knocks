<?php

$nums = [];
for($i = 0; $i < 5; $i++) {
    echo 'input number: ';
    $nums[] = trim(fgets(STDIN));
}
echo 'sum = '.array_sum($nums).PHP_EOL;
