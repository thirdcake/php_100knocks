<?php

use PHPUnit\Framework\TestCase;

require_once '../3.chukyu/ans44.php';

class Test44 extends TestCase {
    public function test_even (){
	$this->assertEquals('10000円は83ドル33セント', main(10000,120));
	$this->assertEquals('15000円は120ドル0セント', main(15000, 125));
    }
}

