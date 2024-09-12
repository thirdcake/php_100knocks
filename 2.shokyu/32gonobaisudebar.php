<?php

foreach(array_fill(0, 20, null) as $key => $val) {
    if ($key % 5 === 4) {
        echo 'bar'.PHP_EOL;
    } else {
        echo (string) ($key + 1).PHP_EOL;
    }
}

