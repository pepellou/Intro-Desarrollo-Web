<?php

require_once dirname(__FILE__)."/WebPage.php";

class FavVideoWebPage extends WebPage {

	public function __construct(
	) {
		$this->setTitle('My favourite videos');
		$this->addCSS('http://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo');
		$this->addCSS('css/style.css');
	}

}
