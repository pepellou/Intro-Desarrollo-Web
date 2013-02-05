<?php

require_once dirname(__FILE__)."/src/FavVideoWebPage.php";

$webPage = new FavVideoWebPage();

?>
<html>
<head><?php $webPage->renderHead(); ?></head>
<body>
	<div class="main">
		<?php $webPage->renderHeader(); ?>
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
