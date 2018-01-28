<?php
	require('login_functions.php');
	if(isset($_POST['action']) && !empty($_POST['action'])) {
		$action = $_POST['action'];
		switch($action) {
			case 'is_logged_in' : is_logged_in();break;
			case 'blah' : blah();break;
		}
	}
?>
