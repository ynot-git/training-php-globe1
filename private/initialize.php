<?php
require_once ('functions.php');
 
// Assign hard-disk DIRECTORY PATHS, as PHP CONSTANTS
// __FILE__ returns the current path to this file
// dirname() returns the path to the parent directory

// Get path for parent of currentfile:
define("PRIVATE_PATH", dirname(__FILE__));
//results is a Hard-Drive PHYSICAL path:
//so, echo PRIVATE_PATH --> "/Users/reni/Sites/globe_bank/private"

// Get path for  parent of the parent of currentfile:
// Like below, or:  define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PROJECT_PATH", dirname( dirname(__FILE__)) );

define("SHARED_PATH", PRIVATE_PATH . '/shared');
define("PUBLIC_PATH", PROJECT_PATH . '/public');


// Assign the WEB-PAGE URL of ROOT-URL of "public" directory, as a PHP constant
// * Do not need to include the domain
// * Use same document root as webserver
// * 1. Can set a hardcoded value:
// define("WWW_ROOT", '/~kevinskoglund/globe_bank/public');
// define("WWW_ROOT", '');

// * Or, 2. Can dynamically find everything in URL up to "/public"
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root); 
// so,echo '<p>' .$public_end . '<p>'; --> 24
// so,echo $doc_root  and WWW_ROOT ---> '/~reni/globe_bank/public'


?>