<?php
require_once('ChromePhp.php');

function is_logged_in(){
	include('./var/www/tyo_config.php');
	if (isset($_SESSION["LoggedIn"]) ? $_SESSION["LoggedIn"] : 0 == 1) {
		echo json_encode(array('success' => true,));
	} else {
		if (isset($_COOKIE['authentication'], $_COOKIE['user'])) {
			$db = new mysqli($servername,$username,$password,$dbname);
			$userid = $_COOKIE['user'];
			$token = hash("sha256", $_COOKIE['authentication']);
			$stmt = $db->prepare("SELECT token FROM token WHERE userid = ? AND token = ? AND timeout > Now()");
			$stmt->bind_param('is', $userid, $token);
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($dbtoken);
			if ($stmt->num_rows > 0) {
				$stmt->close();
				$_SESSION['LoggedIn'] = 1;
				$_SESSION['UserId'] = $userid;
				echo json_encode(array('success' => true,));
			} else {
				$stmt->close();
				echo json_encode(array('success' => false,));
			}
		} else {
			echo json_encode(array('success' => false,));
		}
	}
}

function log_in($email, $password){
	require_once('/var/www/tyo_config.php');
	require_once('password_hash.php');
	$stmt = $db->prepare("SELECT id, password FROM users WHERE username=? LIMIT 1");
	$stmt->bind_param('s', $email);
	$stmt->execute();
	$stmt->bind_result($id, $salt);
	$stmt->fetch();
	$stmt->close();
	$result = validate_password($password, $salt);
	if ($result){
		$newtoken = openssl_random_pseudo_bytes(64);
		$hashedtoken = hash("sha256", $newtoken);
		$timeout = date('Y-m-d H:i:s', strtotime('+14 day', time()));
		$stmt = $db->prepare("INSERT INTO token(userid, token, timeout) VALUES(?, ?, ?)");
		$stmt->bind_param('iss', $id, $hashedtoken, $timeout);
		$stmt->execute();
		$stmt->close();
		setcookie("authentication", $newtoken, time() + (86400 * 14), "/");
		setcookie("user", $id, time() + (86400 * 14), "/");
		$_SESSION['LoggedIn'] = 1;
		$_SESSION['UserId'] = $id;
		return true;
	} else {
		return false;
	}
}

?>
