<?php

use PHPUnit\Framework\TestCase;

require_once '../3.chukyu/ans47.php';

class Test47 extends TestCase {
    public function test_even (){
	$this->assertEquals('a = 5, b = 2', main(2,5));
    }
}

