<?php

echo 'input number: ';
$num = trim(fgets(STDIN));

switch($num) {
    case 1:
        echo 'one';
	break;
    case 2:
	echo 'two';
	break;
    case 3:
	echo 'three';
        break;
    default:
	echo 'others';
}
echo PHP_EOL;

