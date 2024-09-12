<?php

function main($a, $b, $c) {
    $kai = ($b ** 2) - 4 * $a * $c;
    if ($kai > 0) {
        return '2つの実数解';
    } elseif ($kai === 0) {
        return '重解';
    } else {
        return '2つの虚数解';
    }
}
