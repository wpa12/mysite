<?php

class database {

	private $con;
	private $file;

	function __construct () {
		
		$this->file = simplexml_load_file("config.xml");
		
		$this->con = new mysqli("localhost", "root", "", "mysite");

	}
}