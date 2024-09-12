<?php

function main(int $num):string {
	$ans = $num;
	if (0 < $num && $num < 10) {
		$ans .= ' is a single figure.';
		
	} else {
		$ans .= ' is not a single figure.';

	}
	return $ans;
}
