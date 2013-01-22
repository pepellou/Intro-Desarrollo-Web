<?php

require_once dirname(__FILE__)."/src/WebPage.php";

$webPage = new WebPage();
$webPage->setTitle('My favourite videos');
$webPage->addCSS('http://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo');
$webPage->addCSS('css/style.css');

?>
<html>
<head><?php $webPage->renderHead(); ?></head>
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

		<a href="login.php">Login here</a><br/>
		<a href="register.php">Register here</a><br/>
	</div>
</body>
</html>
