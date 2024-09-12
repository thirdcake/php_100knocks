<?php

$arr = array(3, 7, 0, 8, 4, 1, 9, 6, 5, 2);

echo 'input index: ';
$num = (int) trim(fgets(STDIN));
echo 'array[';
echo $num;
echo '] = ';
echo $arr[$num];
echo PHP_EOL;

