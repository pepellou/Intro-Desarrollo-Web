<?php

class User {

	private $username;
	private $password;

	public function __construct(
		$username,
		$password
	) {
		$this->username = $username;
		$this->password = $password;
	}

	public function save(
	) {
		$user_data = 
			"username:{$this->username}\n"
			."password:{$this->password}\n";

		file_put_contents(
			$this->getFile(),
			$user_data
		);
	}

	private function getFile(
	) {
		return dirname(__FILE__)."/../users/".$this->username.".txt";
	}

}
