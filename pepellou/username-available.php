<?php

require_once dirname(__FILE__)."/src/User.php";

if (User::exists($_GET["username"])) {
	echo 'OK';
} else {
	echo 'KO';
}
