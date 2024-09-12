<?php

$arr = array(3, 7, 0, 8, 4, 1, 9, 6, 5, 2);

for($i = 0; $i < 9; $i++) {
    echo $arr[$i] - $arr[$i + 1];
    echo PHP_EOL;
}

