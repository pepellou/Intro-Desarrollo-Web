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
		<h2>Register form</h2>
		<form action="process-register.php" method="POST">
			<fieldset>
				<legend>User data</legend>
				Username: <input type="text" name="username"/><br/>
				Password: <input type="password" name="password"/><br/>
			</fieldset>
			Interests:<br/>
			<input type="checkbox" name="games" value="seleccionado" checked />Games<br/>
			<input type="checkbox" name="cars" />Cars<br/>
			<input type="checkbox" name="football" />Football<br/>
			Gender:<br/>
			<input type="radio" name="gender" value="Man" checked />Man<br/>
			<input type="radio" name="gender" value="Woman" />Woman<br/>
			<select name="select">
				<option>Value A</option>
				<option selected>Value B</option>
				<option>Value C</option>
			</select><br/>
			Describe yourself:<br/>
			<textarea name="description" rows="4" cols="20"></textarea>
			<input type="hidden" name="unDato" value="unValor" /><br/>
			<input type="submit" value="Register" />
		</form>
	</div>
</body>
</html>
