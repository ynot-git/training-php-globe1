<?php
require_once('../../../private/initialize.php'); 

if  (is_post_request()) {
	// Handle/Retrieve the form values sent by new.php (the POST variables)
	$menu_name = isset($_POST['menu_name']) ? $_POST['menu_name']  : '';
	$position = isset($_POST['position']) ? $_POST['position']: '';
	$visible =isset($_POST['visible']) ?  $_POST['visible'] : '';
	
	//Do "processing" on the received variables
	echo "Form parameters<br />";
	echo "Menu name: " . $menu_name . "<br />";
	echo "Position: " . $position . "<br />";
	echo "Visible: " . $visible . "<br />";
} else {
	redir_to( url_for('/staff/index.php') );
}

?>
