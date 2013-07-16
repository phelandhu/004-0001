<?php

require_once ("../../testBootstrap.php");

require_once (ROOT_RESOURCES . "/library/database.php");


class DbConnectTest extends \PHPUnit_Framework_TestCase
{
	protected $db;

	public function setUp() {
		$this->db = new Database(DB_SERVER, DB_DATABASE, DB_USERNAME, DB_PASSWORD);	
	}
	
	public function testConnect()
	{
		$this->db->connect();
	}

	public function testArtist()
	{
		$sql = "SELECT * FROM artistList;";
		$this->db->query($sql);

		while($this->db->nextRecord()){
			echo print_r($this->db->Record);
		}
		$this->assertEquals('bar', 'bar');
	}

	public function testFailure3()
	{
		$this->assertEquals("foo\nbar\nbaz\n", "foo\nbah\nbaz\n");
	}
}