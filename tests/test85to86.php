<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Jokyu\Ans85to86;

final class test85to86 extends TestCase {

    public function test85():void {

// mockを作る
	$a = new Ans85to86();
	$winner = $a->ans85();
	$this->assertSame(1, $winner);

    }

    public function test86():void {
// mockを作る
	    $a = new Ans85to86();
	    $bl = $a->ans86();
            $this->assertSame( true, $bl);
    
    }
}
