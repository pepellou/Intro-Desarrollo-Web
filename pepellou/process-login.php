<?php

require_once dirname(__FILE__)."/src/FavVideoWebPage.php";
require_once dirname(__FILE__)."/src/User.php";

$webPage = new FavVideoWebPage();

session_start();

$user = new User(
	$_POST["username"],
	$_POST["password"]
);
$user->login();

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

	<?php if ($user->isLogged()) { ?>
		<a href="video-list.php">Your list</a><br/>
	<?php } else { ?>
		<p style="color: red">
			<?php echo $user->getError(); ?>
		</p>
	<?php } ?>
	</div>
</body>
</html>
