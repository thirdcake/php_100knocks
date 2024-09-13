<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Chukyu\Ans50to59;

final class test50to59 extends TestCase {

    public function test50():void {
	$ans = explode(PHP_EOL, trim(Ans50to59::ans50()));

	$this->assertSame('1', $ans[1 - 1]);
	$this->assertSame('bar', $ans[5 - 1]);
	$this->assertSame('foobar', $ans[15 - 1]);
	$this->assertSame('foo', $ans[99 - 1]);
    }

    public function test51():void {
        $ans = trim(Ans50to59::ans51(12345));
	$this->assertSame('100円玉123枚, 10円玉4枚, 1円玉5枚', $ans);
    }

    public function test52():void {
        $this->assertSame('2015年は閏年でない', trim(Ans50to59::ans52(2015)));
        $this->assertSame('2016年は閏年である', trim(Ans50to59::ans52(2016)));
        $this->assertSame('2100年は閏年でない', trim(Ans50to59::ans52(2100)));
        $this->assertSame('2000年は閏年である', trim(Ans50to59::ans52(2000)));
    }

    public function test53():void{
        $this->assertSame('2 2 2 3 5 7', trim(Ans50to59::ans53(840)));
    }

    public function test54():void {
	    $small = __DIR__ . '/test54_small.data'; 
	    $middle = __DIR__ . '/test54_middle.data'; 
	    $large = __DIR__ . '/test54_large.data'; 
	    $this->assertSame('最小値 = 128, 最大値 = 962', trim(Ans50to59::ans54($small)));
	    $this->assertSame('最小値 = 20, 最大値 = 988', trim(Ans50to59::ans54($middle)));
	    $this->assertSame('最小値 = 5, 最大値 = 996', trim(Ans50to59::ans54($large)));
    }

    public function test55():void {
	    $ans = <<<EOL
とんでとんでとんでとんでとんでとんでとんでとんでとんでまわってまわってまわってまわる
とんでとんでとんでとんでとんでとんでとんでとんでとんでまわってまわってまわってまわる
とんでとんでとんでとんでとんでとんでとんでとんでとんでまわってまわってまわってまわる
EOL;
	    $this->assertSame(trim($ans), trim(Ans50to59::ans55()));
    }

    public function test56():void {
	    $this->assertSame('0000000001111111', trim(Ans50to59::ans56(127)));
	    $this->assertSame('0010011100010000', trim(Ans50to59::ans56(10000)));
	    $this->assertSame('1111111111111111', trim(Ans50to59::ans56(65535)));
    }

    public function test57() : void {
	    
	    $small = __DIR__ . '/test57_examSmall.data'; 
	    $middle = __DIR__ . '/test57_examMiddle.data'; 
	    $large = __DIR__ . '/test57_examLarge.data'; 
	    $small_result = explode(PHP_EOL, trim(Ans50to59::ans57($small)));
	    $middle_result = explode(PHP_EOL, trim(Ans50to59::ans57($middle)));
	    $large_result = explode(PHP_EOL, trim(Ans50to59::ans57($large)));
	    $this->assertSame('平均点 英語:46, 数学:51, 国語:55', $small_result[0]);
	    $this->assertSame('1: 114', $small_result[1 + 2]);
	    $this->assertSame('8: 96', $small_result[8 + 2]);
	    $this->assertSame('平均点 英語:55, 数学:53, 国語:54', $middle_result[0]);
	    $this->assertSame('48: 265', $middle_result[48 + 2]);
	    $this->assertSame('平均点 英語:52, 数学:51, 国語:51', $large_result[0]);
	    $this->assertSame('98: 107', $large_result[98 + 2]);
	    
    }

    public function test58() : void {
	    $result = trim(Ans50to59::ans58(7, 10, 14, 15, 21));
	    $result = explode(PHP_EOL, $result);
	    $this->assertSame('7	:***** **', $result[0]);
	    $this->assertSame('10	:***** ***** ' , $result[1]);
	    $this->assertSame('14	:***** ***** ****', $result[2]);
	    $this->assertSame('15	:***** ***** ***** ', $result[3]);
	    $this->assertSame('21	:***** ***** ***** ***** *', $result[4]);
    
    }

    public function test59() : void {
	    $input1 = <<<EOL
1 2 3
4 5 6
7 8 9
EOL;
	    $input2 = <<<EOL
2 3 4
5 6 7
8 9 1
EOL;
	    $result = Ans50to59::ans59($input1, $input2);
	    $this->assertSame(3, $result[0][0]);
	    $this->assertSame(5, $result[0][1]);
	    $this->assertSame(7, $result[0][2]);
	    $this->assertSame(9, $result[1][0]);
	    $this->assertSame(11, $result[1][1]);
	    $this->assertSame(13, $result[1][2]);
	    $this->assertSame(15, $result[2][0]);
	    $this->assertSame(17, $result[2][1]);
	    $this->assertSame(10, $result[2][2]);

    }

    
}

