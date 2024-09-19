<?php

namespace Jokyu;



class Ans80to84 {

	public array $ans83win;

	public function __construct() {
		$this->ans83win = [0,0];
	}
	
	public static function ans80(int $n1, int $n2):string{
	
	$max = max($n1, $n2);
	$min = min($n1, $n2);
	$tmp = 2;
	while ($min > 2) {
		$tmp = intdiv($max, $min);
		$max = $min;
		$min = $tmp;
	}
	if ($min === 1) {
		return '互いに素';
	} else {
		return '互いに素でない';
	}

    }

    public static function ans81(int $n1, int $n2, int $n3): int {

	    $heap = new \SplMinHeap();
	    $heap->insert($n1);
	    $heap->insert($n2);
	    $heap->insert($n3);
	    $heap->extract();
	    $ans = $heap->extract();
	    return $ans;

    }


    public static function ans82():string {
	    
	    $ans = [];
	    $ans[0][0] = 1;
	    for($i = 1; $i < 15; $i++) {
		    for ($j = 0; $j < $i+1; $j++) {
			    if ($j === 0) {
			        $ans[$i][0] = $ans[$i - 1][0];
			    }elseif ($j === $i) {
			    	$ans[$i][$i] = $ans[$i - 1][$i - 1];
			    } else {
				$ans[$i][$j] = $ans[$i - 1][$j - 1] + $ans[$i - 1][$j];
			    }
		    }
	    }
	    $ans = array_map(function ($ansi){return implode(' ', $ansi);}, $ans);
	    return implode(PHP_EOL, $ans).PHP_EOL;

    }

    public function ans83(int $man):string {
	    
	    $com = random_int(0,2);
	    $comhand = ['グー','チョキ','パー'][$com];
	    $ans = 'コンピューターは'.$comhand.PHP_EOL;

	    if ($man < 0 || 2 < $man) {
	        $ans .= 'そんな手はありません。あなたの負け'.PHP_EOL;
	    	$this->ans83win[1] += 1;
	    } elseif ($man === $com) {
	        $ans .= 'あいこ'.PHP_EOL;
	    } elseif ($man === ($com + 1) % 3) {
	        $ans .= 'わたしの勝ち'.PHP_EOL;
	        $this->ans83win[1] += 1;
	    } else {
		    $ans .= 'あなたの勝ち'.PHP_EOL;
		    $this->ans83win[0] += 1;
	    }
	    $ans .= 'あなた'.$this->ans83win[0].'勝、わたし'.$this->ans83win[1].'勝'.PHP_EOL;
	    if (array_sum($this->ans83win) === 5) {
	        if ($this->ans83win[0]>2) {
		    $ans .= 'あなたの総合勝利です。参りました。'.PHP_EOL;
		} else {
		    $ans .= 'わたしの総合勝利です。'.PHP_EOL;
		}
	    }

	    return $ans.PHP_EOL;
    }

    public static function ans84():string {

	    $trump = [];
	    for ($i = 0; $i < 4; $i++) {
	    	for ($j = 0; $j < 13; $j++ ) {
			$mark = ['ダイヤ','クローバー','スペード','ハート'][$i];
			if ($j === 0) {
				$num = 'A';
			} elseif ($j === 10) {
				$num = 'J';
			} elseif ($j === 11) {
				$num = 'Q';
			} elseif ($j === 12) {
				$num = 'K';
			} else {
				$num = (string) $j;
			}
			$trump[] = $mark.$num;
		}
	    }
	    foreach($trump as $key => $val) {
	    	    $random = random_int(0, 51);
		    $tmp = $trump[$random];
		    $trump[$random] = $trump[$key];
		    $trump[$key] = $tmp;
	    }
	    return implode(PHP_EOL, $trump);
    }
}
