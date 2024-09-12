<?php

use PHPUnit\Framework\TestCase;

require_once '../3.chukyu/ans48.php';

class Test48 extends TestCase {
	public function test_even (){
		$ans = <<<END
1: 10
2: 5
3: 16
4: 8
5: 4
6: 2
7: 1

END;
	$this->assertEquals($ans, main(3));
    }
}

