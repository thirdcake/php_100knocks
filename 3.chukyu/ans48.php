<?php

function main(int $num):string {
	$ans = '';
	$idx = 1;
	while ($num !== 1) {
		if ($num % 2 === 0) {
		    $num /= 2;
		} else {
		    $num = ($num * 3) + 1;
		}
		$ans .= $idx;
		$ans .= ': ';
		$ans .= $num;
		$ans .= PHP_EOL;
		$idx += 1;
	}
	return $ans;
}
