<?php

require_once dirname(__FILE__)."/src/FavVideoWebPage.php";

$webPage = new FavVideoWebPage();

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
		<h2>Login form</h2>
		<form action="process-login.php" method="POST">
			<fieldset>
				<legend>User data</legend>
				Username: <input type="text" name="username"/><br/>
				Password: <input type="password" name="password"/><br/>
			</fieldset>
			<input type="submit" value="Login" />
		</form>
	</div>
</body>
</html>
