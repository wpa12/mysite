<?php 

include_once 'database.php';

class user {

	public function addUser($username, $password, $email) {
		if(!$username || !$password || !$email){
			echo "please fill out relevant fields";
		}
	}
	
	public function loginUser($username, $password){


		
	}
}