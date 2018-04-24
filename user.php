<?php 

class user {

	public function addUser($username, $password, $email) {
		if(!$username || !$password || !$email){
			echo "please fill out relevant fields";
		}
	}
}