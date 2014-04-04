<?php

Class indexController Extends baseController {

	public function index() {
		/*** set a template variable ***/

		$this->registry->template->showLogo = false;
		$this->registry->template->homePage = true;
		$this->registry->template->route = 'menu';  // Els links de la home apunten a menu
		
		/*** load the index template ***/
		$this->registry->template->show('index');
	}

}

?>
