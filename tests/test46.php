<?php

use PHPUnit\Framework\TestCase;

require_once '../3.chukyu/ans46.php';

class Test46 extends TestCase {
    public function test_even (){
	$this->assertEquals('料金 1800', main(3));
	$this->assertEquals('料金 3850', main(7));
	$this->assertEquals('料金 11000', main(22));
    }
}

