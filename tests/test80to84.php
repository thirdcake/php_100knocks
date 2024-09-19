<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Jokyu\Ans80to84;

final class test80to84 extends TestCase {

    public function test80():void {
    
        $ans1 = trim(Ans80to84::ans80(23,24));
	$ans2 = trim(Ans80to84::ans80(69,23));

	$this->assertSame('互いに素', $ans1);
	$this->assertSame('互いに素でない', $ans2);

    }

    public function test81():void {

	$this->assertSame( 24, Ans80to84::ans81(23,24,25));
	$this->assertSame( 16, Ans80to84::ans81(16,8,21));
    
    }

    public function test82():void {

	    $ans = trim(Ans80to84::ans82());
	    $ans = explode(PHP_EOL, $ans);

   	    $this->assertSame('1 1', trim($ans[1]));
   	    $this->assertSame('1 5 10 10 5 1', trim($ans[5]));
   	    $this->assertSame('1 14 91 364 1001 2002 3003 3432 3003 2002 1001 364 91 14 1', trim($ans[14]));
    
    }

    public function test83():void{

	    $a = new Ans80to84();
	    $ans = [];
	    $win = 0;
	while ( count($ans) < 4 ) {
		$ansstring = trim($a->ans83(0));
		$ans = explode(PHP_EOL, $ansstring);
		switch (trim($ans[0])){
		case 'コンピュータはチョキ':
			$this->assertSame('あなたの勝ち', trim($ans[1]));
			$win += 1;
			break;
		case 'コンピュータはパー':
			$this->assertSame('わたしの勝ち', trim($ans[1]));
			break;
		case 'コンピュータはグー':
			$this->assertSame('あいこ', trim($ans[1]));
			break;
		}
	}
	if ($win > 3){
	    $this->assertSame("あなたの総合勝利です。参りました。", trim($ans[3]));
	} else {
	    $this->assertSame("わたしの総合勝利です。", trim($ans[3]));
	}

    }

    public function test84():void {

	    $ansstring = Ans80to84::ans84();
	    $ans = explode( PHP_EOL, $ansstring );
	    $trump = [];
	    foreach($ans as $val) {
	    	$trump[$val] = 1;
	    }
	    $this->assertSame(52, count(array_keys($trump)));
    
    }
}
