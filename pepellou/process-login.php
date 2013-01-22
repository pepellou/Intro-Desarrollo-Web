<?php

session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$user_data_file = "./users/".$username.".txt";

if (file_exists($user_data_file)) {

	$stored_password = "";

	foreach (file($user_data_file) as $line) {
		$parts = explode(":", trim($line));
		list($field_name, $field_value) = $parts;
		if ($field_name == "password") {
			$stored_password = $field_value;
		}
	}

	if ($password == $stored_password) {
		$logged = true;
		$_SESSION["logged"] = true;
	} else {
		$logged = false;
		$_SESSION["logged"] = false;
		$error = "That's not your password!";
	}


} else {
	$logged = false;
	$_SESSION["logged"] = false;
	$error = "That user doesn't exist!";
}

?>
<html>
<head>
	<title>My favourite videos</title>
	<link href='http://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo' rel='stylesheet' type='text/css'>
	<link href='css/style.css' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="main">
		<h1>
			<a href="">My favourite videos</a>
			<span style="float: right">
				<a href="http://www.imdb.com" target="_blank">
					<img src="img/imdb_logo.png" alt="Goto IMDB" title="Goto IMDB" />
				</a>
			</span>
		</h1>
		<div>
			Welcome to my favourite videos page.<br/>
			Here you can make a list of your favourite videos and see others' lists.
		</div>

	<?php if ($logged) { ?>
		<a href="video-list.php">Your list</a><br/>
	<?php } else { ?>
		<p style="color: red">
			<?php echo $error; ?>
		</p>
	<?php } ?>
	</div>
</body>
</html>
