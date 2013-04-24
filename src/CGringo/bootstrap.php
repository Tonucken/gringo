<?php
/**
* Bootstrapping, setting up and loading the core.
*
* @package GringoCore
*/

/**
* Enable auto-load of class declarations.
Laddar in en fil/class när man skapar ett objekt med new, så slipper man göra require*/
	// Letar först src och sedan i site/src
function autoload($aClassName) {
  $classFile = "/src/{$aClassName}/{$aClassName}.php";
   $file1 = GRINGO_INSTALL_PATH . $classFile;
   $file2 = GRINGO_SITE_PATH . $classFile;
     if(is_file($file1)) {
    require_once($file1);
  } elseif(is_file($file2)) {
    require_once($file2);
  }
}

spl_autoload_register('autoload');

?>