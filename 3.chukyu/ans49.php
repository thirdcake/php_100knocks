<?php

function main():string {
	$kuku = [];
	for($i = 1; $i < 10; $i++) {
	    $kuku[] = [];
	    for ($j = 1; $j < 10; $j++){
	        $kuku[$i - 1][$j - 1] = $i * $j;
	    }
	}
	return implode('	'.PHP_EOL, array_map(function($arr){
	    $str = implode('	', $arr);
	    return $str;
	}, $kuku));
}
