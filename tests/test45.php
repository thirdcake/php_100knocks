<?php

use PHPUnit\Framework\TestCase;

require_once '../3.chukyu/ans45.php';

class Test45 extends TestCase {
    public function test_even (){
	$this->assertEquals('金額 2770', main(10000));
	$this->assertEquals('金額 690', main(2013));
	$this->assertEquals('金額 770', main(2014));
    }
}

