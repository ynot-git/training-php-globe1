<?php

require_once('../../../private/initialize.php');

$test = isset($_GET['test']) ? $_GET['test'] : 'x';
//$test = $_GET['test'] ?? '';

if($test == '404') {
  error_404();
  
} elseif($test == '500') {
  error_500();
  
} elseif ($test=='redirect') {
	redir_to( url_for('/staff/index.php') ) ;
	 
}
 
?>
