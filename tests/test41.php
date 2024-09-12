<?php

use PHPUnit\Framework\TestCase;

require_once '../3.chukyu/ans41.php';

class Test41 extends TestCase {
    public function test_even (){
	$this->assertEquals('6 is a single figure.', main(6));
	$this->assertEquals('10 is not a single figure.', main(10));
	$this->assertEquals('-3 is not a single figure.', main(-3));
	$this->assertEquals('0 is not a single figure.', main(0));
    }
}

