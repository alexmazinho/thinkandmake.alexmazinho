<?php

/*
 * Carrega el controlador correcte a partir de la petició de la URL
 * 
 */

class router {
	/*
	 * @the registry
	 */
	private $registry;

	/*
	 * @the controller path
	 */
	private $path;

	private $args = array();

	public $file;

	public $controller;

	public $action;
	
	function __construct($registry) {
		$this->registry = $registry;
	}

	/**
	 *
	 * @set controller directory path
	 *
	 * @param string $path
	 *
	 * @return void
	 *
	 */
	function setPath($path) {

		/*** check if path is a directory ***/
		if (is_dir($path) == false) {
			throw new Exception('Invalid controller path: `' . $path . '`');
		}
		/*** set the path ***/
		$this->path = $path;
	}

	/**
	 *
	 * @load the controller
	 *
	 * @access public
	 *
	 * @return void
	 *
	 */
	public function loader() {
		/*** check the route ***/
		$this->getController();

		/*** if the file is not there diaf ***/
		if (is_readable($this->file) == false) {
			$this->file = $this->path . '/error404.php';
			$this->controller = 'error404';
		}

		/*** include the controller ***/
		include $this->file;

		/*** a new controller class instance ***/
		$class = $this->controller . 'Controller';
		$controller = new $class($this->registry);

		/*** check if the action is callable ***/
		if (is_callable(array($controller, $this->action)) == false) {
			/* Els controladors sempre tenen el mètode índex com a mínim */
			$action = 'index';
		} else {
			$action = $this->action;
		}
		/*** run the action ***/
		$controller->$action();
	}

	/**
	 *
	 * @get the controller
	 *
	 * @access private
	 *
	 * @return void
	 *
	 */
	private function getController() {

		/*** get the route from the url ***/
		$route = (empty($_GET['route'])) ? '' : $_GET['route'];

		$this->registry->page = -1;
 		
		if (empty($route)) {
			$route = 'index';
		} else {
			/*** get the parts of the route ***/
			$parts = explode('/', $route);
			/*
			 * Obtenir info del PATH de la URL que està traduït - Àlex
			 */
			$urlInfo = Language::getUrlInfo($parts[0], $this->registry->currentLanguage);
			
			if ($urlInfo == null) {
				$this->controller = $parts[0];
				if (isset($parts[1])) $this->action = $parts[1];
			} else {
				if (isset($urlInfo[Language::LANG_DEFAULT])) $route = $urlInfo[Language::LANG_DEFAULT]; // Update route, manté la ruta original en castellà. Valor base de les rutes 
				
				$this->controller = $urlInfo['controller'];
				$this->action = $urlInfo['action'];
				$this->registry->page = $urlInfo['page'];
				
				$this->registry->seo = $urlInfo['seo']; // Info SEO per la plantilla 				
			}
		}
		
		$this->registry->route = $route; // Deso la ruta

		
		if (empty($this->controller)) {
			$this->controller = 'index';
		}

		/*** Get action ***/
		if (empty($this->action)) {
			$this->action = 'index';
		}

		/*** set the file path ***/
		$this->file = $this->path . '/' . $this->controller . 'Controller.php';
	}

}

?>
