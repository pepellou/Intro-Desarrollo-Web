<?php

require_once dirname(__FILE__)."/src/FavVideoWebPage.php";

session_start();

if (isset($_SESSION["logged"]) && $_SESSION["logged"] == "yes") {

$webPage = new FavVideoWebPage();
$webPage->setTitle('Your list');

?>
<html>
<head><?php $webPage->renderHead(); ?></head>
<body>
	<div class="main">
		<?php $webPage->renderHeader(); ?>
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
