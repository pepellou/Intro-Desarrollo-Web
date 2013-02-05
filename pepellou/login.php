<?php

require_once dirname(__FILE__)."/src/FavVideoWebPage.php";

$webPage = new FavVideoWebPage();

?>
<html>
<head><?php $webPage->renderHead(); ?></head>
<body>
	<div class="main">
		<?php $webPage->renderHeader(); ?>
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
