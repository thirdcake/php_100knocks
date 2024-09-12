<?php

function main(int $num):string {
	$ans = $num;
	$ans .= ' is ';
	$ans .= ($num % 2 === 0) ? 'even.' : 'odd.';
	return $ans;
}
