<?php

echo 'input number: ';
$num = trim(fgets(STDIN));

if ($num < 1) {
    echo '0'.PHP_EOL;
} else {
    $ans = array_sum(range(0, $num));
    echo $ans.PHP_EOL;
}

