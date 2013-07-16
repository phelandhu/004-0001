<?php
require_once("testBootstrap.php");

class BootstrapTest extends PHPUnit_Framework_TestCase
{

	public function testShowData() {
		echo "\n";
		echo ROOT_SITE . "\n";
		echo ROOT_RESOURCES . "\n";
	}
}
