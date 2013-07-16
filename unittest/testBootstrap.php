<?php
define("BASE_DIRECTORY", "/home/mbrowne/workspace/004-0001");
define("ROOT_SITE", BASE_DIRECTORY . "/public_html");
define("ROOT_RESOURCES", BASE_DIRECTORY . "/resources");
define("DB_SERVER", "workvm-db");
define("DB_DATABASE", "musicShow");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "asqwe!123");


function getParentDirectory() {
	$parentPath = null;
	// get the current path
	$cur_path = getcwd();
	// get the current directory
	$pathArray = explode('/', $cur_path);
	// pop the last element of the array off
	unset($pathArray[count($pathArray)-1]);
	// now put it back together again
	$parentPath = implode("/",$pathArray);
	// return the current path minus the current directory which will be the parent path
	return $parentPath;
}
