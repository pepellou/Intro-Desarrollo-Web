<?php

require_once dirname(__FILE__)."/src/FavVideoWebPage.php";

$webPage = new FavVideoWebPage();

?>
<html>
<head><?php $webPage->renderHead(); ?>
<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
<style>
	.icon {
		width: 16px;
		height: 16px;
	}
	.hidden {
		display: none;
	}
</style>
</head>
<body>
	<div class="main">
		<?php $webPage->renderHeader(); ?>
		<h2>Register form</h2>
		<form onsubmit="return validar()" action="process-register.php" method="POST">
			<fieldset>
				<legend>User data</legend>
				Username: <input id="inputUserName" type="text" name="username" />
<img class="icon valid hidden" src="img/valid.png"/>
<img class="icon invalid" src="img/invalid.png"/>
<br/>
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

	$('input[name="username"]').focusout(function() {
		$.get(
			'http://localhost/cdw/username-available.php',
			{ username: $(this).val() },
			function (result) {
				if (result == 'OK') {
					$('img.valid').removeClass('hidden');
					$('img.invalid').addClass('hidden');
				} else {
					$('img.invalid').removeClass('hidden');
					$('img.valid').addClass('hidden');
				}
			}
		);
	});

	</script>
</body>
</html>
