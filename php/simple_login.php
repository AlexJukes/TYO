<?php
	require_once('login_functions.php');
	session_start();
	include('./var/www/tyo_config.php');
	$username = isset($_POST['username1']) ? $_POST['username1'] : '';
	$password= isset($_POST['password1']) ? $_POST['password1'] : '';

  if (isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] == 1) {
		ChromePhp::log("Logged In By Session");
	}

	if (isset($_COOKIE['authentication'], $_COOKIE['user'])) {
		$userid = $_COOKIE['user'];
		$token = hash("sha256", $_COOKIE['authentication']);
		$_SESSION['LoggedIn'] = 1;
		$_SESSION['UserId'] = $userid;
	}

  if ($username == $login_name && $password == $login_password) {
    $newtoken = openssl_random_pseudo_bytes(64);
    $hashedtoken = hash("sha256", $newtoken);
    ChromePhp::log($newtoken);
    ChromePhp::log($hashedtoken);
    $timeout = date('Y-m-d H:i:s', strtotime('+14 day', time()));
    setcookie("authentication", $newtoken, time() + (86400 * 14), "/");
    setcookie("user", $id, time() + (86400 * 14), "/");
    $_SESSION['LoggedIn'] = 1;
    $_SESSION['UserId'] = $id;
    echo 1;
  } else {
    echo "Email or Password is wrong...!!!!";
  }
  ?>
