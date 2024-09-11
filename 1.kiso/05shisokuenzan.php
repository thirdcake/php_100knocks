<?php
echo 'input 1st number: ';
$num1 = (int) trim(fgets(STDIN));
echo 'input 2nd number: ';
$num2 = (int) trim(fgets(STDIN));
echo PHP_EOL;
echo '和: '.(string) ($num1 + $num2). PHP_EOL;
echo '差: '.(string) ($num1 - $num2). PHP_EOL;
echo '積: '.(string) ($num1 * $num2). PHP_EOL;
if($num2 === 0) {
    echo '商: 解なし'.PHP_EOL;
} else {
    echo '商: ';
    echo (string) intdiv($num1, $num2);
    echo ', ';
    echo '余り: ';
    echo (string) ($num1 % $num2).PHP_EOL;
}

