<?php

class User {

	private $username;
	private $password;
	private $logged;
	private $error;

	public function __construct(
		$username,
		$password
	) {
		$this->username = $username;
		$this->password = $password;
		$this->logged = false;
		$this->error = "";
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

	public function login(
	) {
		if (file_exists($this->getFile())) {

			$stored_password = "";

			foreach (file($this->getFile()) as $line) {
				$parts = explode(":", trim($line));
				list($field_name, $field_value) = $parts;
				if ($field_name == "password") {
					$stored_password = $field_value;
				}
			}

			if ($this->password == $stored_password) {
				$this->logged = true;
				$_SESSION["logged"] = true;
			} else {
				$this->logged = false;
				$_SESSION["logged"] = false;
				$this->error = "That's not your password!";
			}

		} else {
			$this->logged = false;
			$_SESSION["logged"] = false;
			$this->error = "That user doesn't exist!";
		}
	}

	public function isLogged(
	) {
		return $this->logged;
	}

	public function getError(
	) {
		return $this->error;
	}

	public static function currentUser(
	) {
		if (!isset($_SESSION["logged"])) {
			return null;
		}
		if ($_SESSION["logged"] != "yes") {
			return null;
		}
		return new User(
			"somebody",
			"password"
		);
	}

}
