<?php

use PHPUnit\Framework\TestCase;

require_once '../3.chukyu/ans40.php';

class Test40 extends TestCase {
    public function test_even (){
	$this->assertEquals('6 is even.', main(6));
	$this->assertEquals('7 is odd.', main(7));
    }
}

