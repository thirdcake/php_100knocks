<?php

function main(int $kyori): string {
	$ans = '金額 ';
	$money = 610; 
	$kyori -= 1700;
	if ($kyori > 0) {
		$count = intdiv($kyori, 313);
		$amari = $kyori % 313;
		if ($amari > 0) {
		    $count += 1;
		}
		$money += (80 * $count);
	}
	$ans .= $money;
	return $ans;
}
