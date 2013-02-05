<?php

class WebPage {

	private $title;
	private $css_links;

	public function __construct(
	) {
		$this->css_links = array();
	}

	public function setTitle(
		$title
	) {
		$this->title = $title;
	}

	public function addCSS(
		$link
	) {
		$this->css_links []= $link;
	}

	public function renderHead(
	) {
		echo "<title>{$this->title}</title>";
		foreach ($this->css_links as $css_link) {
			echo "<link href='{$css_link}' rel='stylesheet' type='text/css'>";
		}
	}

}
