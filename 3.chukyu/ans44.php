<?php

function main(int $yen, int $rate):string {
	$ans = $yen . '円は';
	$ans .= intdiv($yen, $rate);
	$ans .= 'ドル';
	$amari = $yen % $rate;
	$ans .= intdiv($amari * 100, $rate);
	$ans .= 'セント';
	return $ans;
}

