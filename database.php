<?php

class database {

	private $con;
	private $host, $username, $password, $dbName;

	//constructor to assign the above variables to xml data 
	function __construct () {
		
		$xml = simplexml_load_file("config.xml") or die ("Error: cannot find config.xml");

		$this->host = $xml->host;
		$this->username = $xml->username;
		$this->password = $xml->password;
		$this->dbName = $xml->dbName;
	}

	function createDatabase () {
		$sql = "CREATE DATABASE mysite";
		
	}

	//method to connect to the database
	private function databaseConnect () {

		$this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbName) or die ("database doesn't exist");
	}
}

$db = new database();

$db->databaseConnect();