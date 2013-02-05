<?php

require_once dirname(__FILE__)."/src/User.php";

$user = new User(
	$_POST["username"],
	$_POST["password"]
);
$user->save();

?>
Registered!
