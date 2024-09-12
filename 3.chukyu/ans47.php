<?php

function main(int $a, int $b):string {
	$tmp = $a;
	$a = $b;
	$b = $tmp;
	return 'a = '.$a.', b = '.$b;
}
