	<?php
	session_start();
	include('./var/www/tyo_config.php');
	include('password_hash.php');
	include('ChromePhp.php');
	$db = new mysqli($servername,$username,$password,$dbname);
	if (isset($_POST['email1'], $_POST['password1'])) {
		$email=$_POST['email1'];
		$password=$_POST['password1'];
	}
	if (!$db->set_charset("utf8")) {
		printf("Error loading character set utf8: %s\n", $db->error);
	}

	if (isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] == 1) {
		ChromePhp::log("Logged In By Session");
	} else {
		if (isset($_COOKIE['authentication'], $_COOKIE['user'])) {
			$userid = $_COOKIE['user'];
			$token = hash("sha256", $_COOKIE['authentication']);
			$stmt = $db->prepare("SELECT token FROM token WHERE userid = ? AND token = ? AND timeout > Now()");
			$stmt->bind_param('is', $userid, $token);
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($dbtoken);
			if ($stmt->num_rows > 0) {
				$stmt->close();
				echo "cookie already set";
				$_SESSION['LoggedIn'] = 1;
				$_SESSION['UserId'] = $userid;
			} else {
				$stmt->close();
				echo "cookie no longer valid";
				echo "\r\n";
				echo "cookie hash: " . hash("sha256", $token);
				echo "\r\n";
				echo "database hash: " . $dbtoken;
			}
		} else {
			// check if e-mail address syntax is valid or not
			$email = filter_var($email, FILTER_SANITIZE_EMAIL); // sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo "Invalid Email.......";
			}else{
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
					ChromePhp::log($newtoken);
					ChromePhp::log($hashedtoken);
					$timeout = date('Y-m-d H:i:s', strtotime('+14 day', time()));
					$stmt = $db->prepare("INSERT INTO token(userid, token, timeout) VALUES(?, ?, ?)");
					$stmt->bind_param('iss', $id, $hashedtoken, $timeout);
					$stmt->execute();
					$stmt->close();
					setcookie("authentication", $newtoken, time() + (86400 * 14), "/");
					setcookie("user", $id, time() + (86400 * 14), "/");
					$_SESSION['LoggedIn'] = 1;
					$_SESSION['UserId'] = $id;
					echo "Succesfully Logged in...";
				} else {
					echo "Email or Password is wrong...!!!!";
				}
			}
		}
	}
?>
