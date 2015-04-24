<?php

require_once "randomGen.php";

class TestCaseTest extends PHPUnit_Framework_TestCase{

	public function testAvailableFileType(){
		$randomNum = randonGen();
		$this->assertTrue($randomNum < 50);
	}
}