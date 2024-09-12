<?php

$arr = array(3, 7, 0, 8, 4, 1, 9, 6, 5, 2);
$key = 0;
for($i = 0; $i < 10; $i++) {
    $key = $arr[$key];
    echo $key.PHP_EOL;
}

