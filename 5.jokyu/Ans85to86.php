<?php

namespace Jokyu;

class Ans85to86 {

	private function in(): int {
		return trim(fgets(STDIN));
	}
        public function ans85(): int {
		echo '石の数を入力してください（10以上）: ';
		$num = (int) $this->in();
		$player = 1;
		while (true) {
			echo "石の数: $num".PHP_EOL;
			if ($num === 1) {
				$player %= 2;
				$player += 1;
				echo "プレイヤー $player の勝ち".PHP_EOL;
				break;
			} elseif ($num < 1) {
				echo "プレイヤー $player の負け".PHP_EOL;
				$player %= 2;
				$player += 1;
				break;
			}
			echo "プレイヤー $player の番です".PHP_EOL;
			echo "何個取る(1-3個)? ";
			$stone = $this->in();
			$num -= $stone;
			$player %= 2;
			$player += 1;
		}
		return $player;

	}
	private function div4 (int $num):int {
		$stone = $num % 4;
		$stone += 3;
		$stone %= 4;
		return $stone;
	}
	public function ans86(): bool {
		echo '石の数を入力してください（10以上）: ';
		$num = $this->in();
		echo '石の数: '.$num.PHP_EOL;
		if ($num % 4 === 1) {
			echo 'あなたからどうぞ'.PHP_EOL;
		} else {
			echo 'ではわたしから'.PHP_EOL;
			$stone = $this->div4($num);
			echo "$stone 個取ります".PHP_EOL;
			$num -= $stone;
		}
		while ($num > 1) {
			echo "石の数: $num ".PHP_EOL;
			echo "何個取る(1-3個)? ";
			$stone = $this->in();
			if ($stone < 1 || 3 < $stone) {
				continue;
			}
			$num -= $stone;
			echo "石の数: $num ".PHP_EOL;
			$stone = $this->div4($num);
			echo "$stone 個取ります".PHP_EOL;
			$num -= $stone;
		}
		echo "石の数: $num ".PHP_EOL;
		echo 'わたしの勝ち'.PHP_EOL;
		return ($num === 1);
	}

}



// 実行
// $a = new Ans85to86();
// $a->ans85();
// $a->ans86();

