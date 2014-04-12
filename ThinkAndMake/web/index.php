<?php

 /* 
  * http://www.phpro.org/tutorials/Model-View-Controller-MVC.html
  * 
  * index.php és el Front Controller. Totes les peticions es redirigeixen a index.php a través de .htaccess
  *
  * RewriteEngine on
  *	RewriteCond %{REQUEST_FILENAME} !-f
  * RewriteCond %{REQUEST_FILENAME} !-d
  * RewriteRule ^(.*)$ index.php?rt=$1 [L,QSA]
  * 
  * URL's format http://www.example.com/controller/metode   
  */

 /*** error reporting on ***/
 //error_reporting(E_ALL);
 error_reporting(E_ALL | E_WARNING);

 /*** define site's paths ***/
 $site_path = realpath(dirname(__FILE__));
 define ('__SITE_PATH', $site_path);
 define ('__SRC_PATH', __SITE_PATH.'/../src');
 #define( '__SITE_URL', 'http://s317722982.mialojamiento.es/thinkandmake/web');
 define( '__SITE_URL', 'http://www.thinkandmake.dev');
 define( '__LOCALE_DIR', __SRC_PATH."/locale" );
 
 /*** inicialitza classes ***/
 include __SRC_PATH.'/includes/init.php';

 /*** Gestiona peticions URL i carrega controller corresponent ***/
 $registry->router = new router($registry);
 $registry->router->setPath (__SRC_PATH.'/controller');
 /*** load up the template ***/
 $registry->template = new template($registry);
 /*** language ***/
 $registry->language = new language($registry);
 /*** load the controller ***/
 $registry->router->loader();
 
?>
