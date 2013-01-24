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
		<form onsubmit="return validar()" action="process-register.php" method="POST">
			<fieldset>
				<legend>User data</legend>
				Username: <input id="inputUserName" type="text" name="username" onfocusout="checkAvailable()" /><br/>
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
	<script language="javascript">
		function validar() {
			var input = document.getElementById("inputUserName");
			var username = input.value;
			if (username.length < 4) {
				alert('Username must be at least 4 characters long');
				return false;
			}
			return true;
		}

function checkAvailable() {
	var input = document.getElementById("inputUserName");
	var username = input.value;
	var request = new XMLHttpRequest();
	request.onreadystatechange = function() {
		if (request.readyState==4 
			&& request.status==200) {

			if (request.responseText == 'OK') {
			} else {
				alert('That name already exists');
			}
		}
	}
	request.open('GET', 'http://localhost/cdw/username-available.php?username=' + username);
	request.send();
}
	</script>
</body>
</html>
