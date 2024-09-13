<?php

namespace Chukyu;

class Ans50to59 {

    public static function ans50(){
	$ans = range(1, 100);
	$ans = array_map(function($x) {
	    if ($x % 15 === 0) {
	        return 'foobar';
	    } elseif ($x % 5 === 0) {
		return 'bar';
	    } elseif ($x % 3 === 0) {
		return 'foo';
	    } else {
		return $x;
	    }
	}, $ans);
        return implode(PHP_EOL, $ans).PHP_EOL;
    }

    public static function ans51($money): string {
	    $hun = intdiv($money, 100);
	    $ten = intdiv(($money - $hun * 100), 10);
	    $one = $money - $hun * 100 - $ten * 10;
	    $ans = '100円玉';
	    $ans .= $hun;
	    $ans .= '枚, 10円玉';
	    $ans .= $ten;
	    $ans .= '枚, 1円玉';
	    $ans .= $one;
	    $ans .= '枚'.PHP_EOL;

	    return $ans;
    }


    public static function ans52($year):string {
	    $ans = $year;
	    $ans .= '年は閏年で';
	    if ($year % 400 === 0) {
	        $ans .= 'ある';
	    } elseif ($year % 100 === 0) {
		$ans .= 'ない';
	    } elseif ($year % 4 === 0) {
	        $ans .= 'ある';
	    } else {
	        $ans .= 'ない';
	    }
	    $ans .= PHP_EOL;
	    return $ans;
    }
    public static function ans53(int $num):string {
	    $needle = 2;
	    $ans = [];
	    $max = $num ** 0.5;
	    while ($needle <= $max){
		    while ($num % $needle === 0) {
			    $ans[] = $needle;
			    $num /= $needle;
		    }
		    $needle += 1; 
	    }
	    return implode(' ', $ans).PHP_EOL;
    }

    public static function ans54(string $file_name):string {

	    $data = file_get_contents($file_name);
	    $data = trim($data);
	    $data = explode(PHP_EOL, $data);
	    $data = array_map('intval', $data);
	    $n = array_shift($data);
	    $max = max($data);
	    $min = min($data);
	    $ans = "最小値 = {$min}, 最大値 = {$max}".PHP_EOL;
	    return $ans;
    }

    public static function ans55(): string {
	    $tonde = implode('', array_fill(0, 9, 'とんで'));
	    $mawatte = implode(array_fill(0, 3, 'まわって'));
	    $mawaru = 'まわる';
	    $line = implode('', [$tonde, $mawatte, $mawaru]);
	    $ans = implode(PHP_EOL, array_fill(0, 3, $line));
	    return $ans.PHP_EOL;
    }

    public static function ans56(int $num) : string {
	    $num = (int) $num;
	    $ans = [];
	    for ($i = 0; $i < 16; $i++ ) {
		    $ans[] = ($num >> (15 - $i)) & 1;
	    }
	    return implode('', $ans).PHP_EOL;
    }

    public static function ans57(string $file_name) : string {
	    $data = file_get_contents($file_name);
	    $data = explode(PHP_EOL, $data);
	    $n = (int) array_shift($data);
	    $tmp = [];
	    for ($i = 0; $i < $n; $i++) {
		    $insert = explode(' ', trim($data[$i]));
		    $insert = array_map('intval', $insert);
		    $tmp[] = $insert;
	    }
	    $data = $tmp;
	    $sum_data = array_reduce($data, function ($c, $i){
		    $c[0] += (int)$i[0];
		    $c[1] += (int)$i[1];
		    $c[2] += (int)$i[2];
		    return $c;
	    }, [0, 0, 0]);
	    $ave_data = array_map(fn($d)=>intdiv($d,$n), $sum_data);
	    $ans = [];
	    $ans[] = "平均点 英語:{$ave_data[0]}, 数学:{$ave_data[1]}, 国語:{$ave_data[2]}";
	    $ans[] = '個人合計点';
	    foreach($data as $k => $v) {
	        $sum = array_sum($v);
	        $ans[] = "{$k}: {$sum}";
	    }
	    return implode(PHP_EOL, $ans).PHP_EOL;
    }

    public static function ans58(int ...$nums): string {
	    $anss = [];
	    foreach($nums as $v) {
		    $ans = range(1, $v);
		    $ans = array_map(function($v){
		        if ($v % 5 === 0) {
			    return "* ";
			} else {
			    return "*";
			}
		    }, $ans);
		    $ans = implode('', $ans);
		    $ans = $v.'	:'.$ans;
		    $anss[] = $ans;
	    }
	    return implode(PHP_EOL, $anss).PHP_EOL;

    }

    public static function ans59(string $mat1, string $mat2):array {
	    $ans = [];
	    $mat1 = trim($mat1);
	    $mat2 = trim($mat2);
	    $mat1 = explode(PHP_EOL, $mat1);
	    $mat2 = explode(PHP_EOL, $mat2);
	    $split = fn($mat)=> explode(' ', trim($mat));
	    $mat1 = array_map($split, $mat1);
	    $mat2 = array_map($split, $mat2);
	    foreach ($mat1 as $i => $mat1i) {
		foreach($mat1i as $j => $mat1ij) {
		    $ans[$i][$j] = $mat1ij + $mat2[$i][$j];
		}
	    }
	    return $ans;
    }
}

