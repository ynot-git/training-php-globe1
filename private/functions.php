<?php

//FUNCTION url_for
// Tacks on the value of root path to passed-in url
function url_for($script_path) {
	// adds the leading '/', if not present
	if($script_path[0] != '/') {
		$script_path = "/" . $script_path;
	}
	return WWW_ROOT . $script_path;
	// calling code will still need to do the 'echo' part afterwards
}


//FUNCTION u
// Converts text via urlencode
function u($string="") {
	return urlencode($string);
}


//FUNCTION raw_u
// Converts text via rawurlencode
function raw_u($string="") {
	return rawurlencode($string);
}


//FUNCTION h
// Converts text (for urls) to be 'safe' from html special characters
function h($string="") {
	return htmlspecialchars($string);
}

//FUNCTION error_404
// display Header information as '404'
function error_404() {
	header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
	echo '404';
	exit();
}
	// RESULTS:
	// Check the test in the WEB Browser:
	//  http://localhost/~reni/globe_bank/public/staff/subjects/new.php?test=404
	// OR at TERMINAL/Command-Line:
	// RVXs-MacBook-Pro:~ reni$ curl --head http://localhost/~reni/globe_bank/public/staff/subjects/new.php?test=404
	// HTTP/1.1 404 Not Found
	// Date: Sun, 13 Aug 2017 01:15:43 GMT
	// Server: Apache/2.4.25 (Unix) PHP/5.6.30
	// X-Powered-By: PHP/5.6.30
	// Content-Type: text/html; charset=UTF-8
	 

//FUNCTION error_500
// display Header information as '404'
function error_500() {
	header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
	exit();
}

//FUNCTION redir_to($location)
// handle redirection with a "302 Found... go to location" process
function redir_to($location) { 
	header("Location: " .  $location );
	exit();
}
	// RVXs-MacBook-Pro:~ reni$ curl --head http://localhost/~reni/globe_bank/public/staff/subjects/new.php?test=redirect
	// HTTP/1.1 302 Found
	// Date: Sun, 13 Aug 2017 02:19:11 GMT
	// Server: Apache/2.4.25 (Unix) PHP/5.6.30
	// X-Powered-By: PHP/5.6.30
	// Location: index.php
	// Content-Type: text/html; charset=UTF-8
	
	// RVXs-MacBook-Pro:~ reni$



?>

 