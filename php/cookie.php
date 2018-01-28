<?php
	require_once('login_functions.php');
	
	$loggedin =  is_logged_in();
	ChromePhp::log($loggedin);
?>