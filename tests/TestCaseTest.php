<?php

require_once __DIR__.'/../randomGen.php';

class TestCaseTest extends PHPUnit_Framework_TestCase{

	public function testAvailableFileType(){
		$randomNum = randonGen();
		$this->assertTrue($randomNum >50);
	}
}
