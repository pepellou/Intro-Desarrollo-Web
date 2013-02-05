<?php

require_once dirname(__FILE__)."/WebPage.php";

class FavVideoWebPage extends WebPage {

	public function __construct(
	) {
		$this->setTitle('My favourite videos');
		$this->addCSS('http://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo');
		$this->addCSS('css/style.css');
	}

	public function renderHeader(
	) {
		echo "<h1>";
		echo "<a href='index.php'>My favourite videos</a>";
		echo "<span style='float: right'>";
		echo "<a href='http://www.imdb.com' target='_blank'>";
		echo "<img src='img/imdb_logo.png' alt='Goto IMDB' title='Goto IMDB' />";
		echo "</a>";
		echo "</span>";
		echo "</h1>";
	}

}
