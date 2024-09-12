<?php

$arr = array(3, 7, 0, 8, 4, 1, 9, 6, 5, 2);

echo 'input index1: ';
$idx1 = trim(fgets(STDIN));

echo 'input index2: ';
$idx2 = trim(fgets(STDIN));

echo $arr[$idx1];
echo ' * ';
echo $arr[$idx2];
echo ' = ';
echo $arr[$idx1] * $arr[$idx2];
echo PHP_EOL;
