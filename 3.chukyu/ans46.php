<?php

function main(int $n): string {
	$ans = '料金 ';
	$fee = 0;
	if ($n > 20){
		$fee = $n * 500;
	} elseif ($n > 5) {
		$fee = $n * 550;
	} else {
		$fee = $n * 600;
	}
	$ans .= $fee;
	return $ans;
}
