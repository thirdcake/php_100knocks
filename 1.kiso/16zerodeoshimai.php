<?php

while (true) {
    echo 'input number: ';
    $num = (int) trim(fgets(STDIN));
    if ($num === 0) {
        break;
    }
}

