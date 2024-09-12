<?php

echo 'input 1st value: ';
$num1 = (int) trim(fgets(STDIN));

echo 'input 2nd value: ';
$num2 = (int) trim(fgets(STDIN));
echo 'result: ';
echo (string) intdiv($num1, $num2);
echo PHP_EOL;
echo 'result: ';
echo (string) (intdiv($num1, $num2) * $num2);
echo PHP_EOL;
