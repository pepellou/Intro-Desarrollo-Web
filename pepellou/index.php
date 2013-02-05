<?php

require_once dirname(__FILE__)."/src/FavVideoWebPage.php";

$webPage = new FavVideoWebPage();

?>
<html>
<head><?php $webPage->renderHead(); ?></head>
<body>
	<div class="main">
		<?php $webPage->renderHeader(); ?>
		<div>
			Welcome to my favourite videos page.<br/>
			Here you can make a list of your favourite videos and see others' lists.
		</div>

		<a href="login.php">Login here</a><br/>
		<a href="register.php">Register here</a><br/>
	</div>
</body>
</html>
