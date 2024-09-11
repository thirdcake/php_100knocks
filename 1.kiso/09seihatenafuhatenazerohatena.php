<?php
echo 'input number: ';
$num = (int) trim(fgets(STDIN));
if ($num > 0) {
    echo 'positive';
}elseif($num < 0){
    echo 'negative';
}else {
    echo 'zero';
}
echo PHP_EOL;
