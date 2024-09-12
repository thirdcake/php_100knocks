<?php

use PHPUnit\Framework\TestCase;

require_once '../3.chukyu/ans42.php';

class Test42 extends TestCase {
    public function test_even (){
	$this->assertEquals('OK', main(1,2,3));
	$this->assertEquals('OK', main(1,1,3));
	$this->assertEquals('NG', main(2,1,3));
    }
}

