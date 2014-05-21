<?php

/*
 * Classe abstracte que hereten els controladors
 * 
 */

Abstract Class baseController {

	/*
	 * @registry object
	 */
	protected $registry;

	function __construct($registry) {
		$this->registry = $registry;
		
		/*** set common template variables ***/
		$this->registry->template->homePage = false;
		$this->registry->template->page = $this->registry->page;
		$this->registry->template->lang = $this->registry->currentLanguage;
		$this->registry->template->showLogo = true;
		$this->registry->template->route = $this->registry->route;
		
		if (isset($this->registry->seo)) $this->registry->template->seo = $this->registry->seo;
		else $this->registry->template->seo = Language::$seoDefault;
		
	}

	/**
	 * @all controllers must contain an index method
	 */
	abstract function index();
}

?>
