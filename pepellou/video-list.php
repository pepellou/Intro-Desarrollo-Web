<?php

session_start();

if (isset($_SESSION["logged"]) && $_SESSION["logged"] == "yes") {

?>
<html>
<head>
	<title>Your list</title>
	<link href='http://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo' rel='stylesheet' type='text/css'>
	<link href='css/style.css' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="main">
		<h1>
			<a href="index.php">My favourite videos</a>
			<span style="float: right">
				<a href="http://www.imdb.com" target="_blank">
					<img src="img/imdb_logo.png" alt="Goto IMDB" title="Goto IMDB" />
				</a>
			</span>
		</h1>
		<p>
			This is <u>your list</u>:
			<ol>
				<li>Matrix</li>
				<li>The Party</li>
			</ol>
		</p>
		<a href="index.php">Return to home</a>
	</div>
</body>
</html>

<?php } else { ?>

ACCESS ERROR

<?php } ?>
