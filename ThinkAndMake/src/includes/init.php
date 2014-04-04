<?php

/*
 * Inicialitza les classes del model MVC 
 * 
 * http://www.php.net/manual/en/language.oop5.autoload.php
 * 
 *  __autoload() function is automatically called in case you are trying to use a class/interface which hasn't been defined yet
 *  
 * No cal posar tots els includes, quan es crein nous objectes de classes no definides, s'ecxecutarà la crida automàticament  
 * Si la classe no existeix retorna false 
 * 
 * Per convenció les classes s'anomenaran com el fitxer que les conté amb extensió .class.php   
 */

include __SRC_PATH . '/application/' . 'controller_base.class.php';
include __SRC_PATH . '/application/' . 'registry.class.php';
include __SRC_PATH . '/application/' . 'router.class.php';
include __SRC_PATH . '/application/' . 'template.class.php';
include __SRC_PATH . '/application/' . 'language.class.php';

/*** auto load model classes ***/
function __autoload($class_name) {
	$filename = strtolower($class_name) . '.class.php';
	$file = __SRC_PATH . '/model/' . $filename;

	if (file_exists($file) == false) {
		return false;
	}
	include($file);
}

$registry = new registry;

?>
