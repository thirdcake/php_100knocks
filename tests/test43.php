<?php

use PHPUnit\Framework\TestCase;

require_once '../3.chukyu/ans43.php';

class Test43 extends TestCase {
    public function test_even (){
	$this->assertEquals('2つの虚数解', main(4,-3,1));
	$this->assertEquals('重解', main(1,2,1));
	$this->assertEquals('2つの実数解', main(3,2,-4));
    }
}

