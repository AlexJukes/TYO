<?

/**
 * Checks whether or not the given username is in the
 * database, if so it checks if the given password is
 * the same password in the database for that user.
 * If the user doesn't exist or if the passwords don't
 * match up, it returns an error code (1 or 2). 
 * On success it returns 0.
 */
function confirmUser($username, $password){
   global $conn;
   /* Add slashes if necessary (for query) */
   if(!get_magic_quotes_gpc()) {
	$username = addslashes($username);
   }

   /* Verify that user is in database */
   $q = "select password from tyo_contacts where email = '$username' AND allowedWebsite = 1";
   $result = mysql_query($q,$conn);
   if(!$result || (mysql_numrows($result) < 1)){ //if it fails, retry the query
      return 1; //Indicates username failure
   }

   /* Retrieve password from result, strip slashes */
   $dbarray = mysql_fetch_array($result);
   $dbarray['password']  = stripslashes($dbarray['password']);
   $password = stripslashes($password);

   /* Validate that password is correct */
   if($password == $dbarray['password']){
      return 0; //Success! Username and password confirmed
   }
   else{
      return 2; //Indicates password failure
   }
}

/**
 * checkLogin - Checks if the user has already previously
 * logged in, and a session with the user has already been
 * established. Also checks to see if user has been remembered.
 * If so, the database is queried to make sure of the user's 
 * authenticity. Returns true if the user has logged in.
 */
function checkLogin(){
   /* Check if user has been remembered */
   if(isset($_COOKIE['tyo_cookname']) && isset($_COOKIE['tyo_cookpass'])){
      $_SESSION['username'] = $_COOKIE['tyo_cookname'];
      $_SESSION['password'] = $_COOKIE['tyo_cookpass'];
   }

   /* Username and password have been set */
   if(isset($_SESSION['username']) && isset($_SESSION['password'])){
      /* Confirm that username and password are valid */
      if(confirmUser($_SESSION['username'], $_SESSION['password']) != 0){
         /* Variables are incorrect, user not logged in */
         unset($_SESSION['username']);
         unset($_SESSION['password']);
         return false;
      }
      return true;
   }
   /* User not logged in */
   else{
      return false;
   }
}

/**
 * Determines whether or not to display the login
 * form or to show the user that he is logged in
 * based on if the session variables are set.
 */
function displayLogin(){
   global $logged_in;
   if($logged_in){
      echo "<h3>Logged In!</h3>";
      echo "Welcome <b>$_SESSION[username]</b>, you are logged in. <a href=\"updatedetails.php\">Update details/change password</a>. <a href=\"logout.php\">Logout</a>";
   }
   else{
?>
<link href="tpa.css" rel="stylesheet" type="text/css">
<h4 align="center">To view the performers' area you must be logged in</h4>
<form action="" method="post">
  <div align="center">
    <table align="center" border="0" cellspacing="0" cellpadding="3">
      <tr>
        <td width="63">Username:</td>
        <td width="238"><input name="user" type="text" size="50" maxlength="100"></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" name="pass" maxlength="30"></td>
      </tr>
      <tr>
        <td colspan="2" align="left"><input name="remember" type="checkbox" checked>
          Keep me logged in</td>
      </tr>
      <tr>
        <td colspan="2" align="right"><input type="submit" name="sublogin" value="Login"></td>
      </tr>
      <tr> 
        <td colspan="2" align="left"> Forgotten your login or password? <br>
          Let us know <a href="mailto:admin@thamesyouthorchestra.co.uk">here</a></td>
      </tr>
    </table>
  </div>
</form>
  <?
   }
}


/**
 * Checks to see if the user has submitted his
 * username and password through the login form,
 * if so, checks authenticity in database and
 * creates session.
 */
if(isset($_POST['sublogin'])){
   /* Check that all fields were typed in */
   if(!$_POST['user'] || !$_POST['pass']){
      die('You didn\'t fill in a required field. Return to <a href="performers.php">login page</a>');
   }
   /* Spruce up username, check length */
   $_POST['user'] = trim($_POST['user']);
   if(strlen($_POST['user']) > 50){
      die('Sorry, the username is longer than 50 characters, please shorten it. Return to <a href="performers.php">login page</a>');
   }

   /* Checks that username is in database and password is correct */
   //$md5pass = md5($_POST['pass']);
   $md5pass = $_POST['pass'];
   $result = confirmUser($_POST['user'], $md5pass);

   /* Check error codes */
   if($result == 1){
	  die('That username doesn\'t exist in our database or you do not have access to the performers area. Return to <a href="performers.php">login page</a>');
   }
   else if($result == 2){
      die('Incorrect password, please try again. Return to <a href="performers.php">login page</a>');
   }

   /* Username and password correct, register session variables */
   $_POST['user'] = stripslashes($_POST['user']);
   $_SESSION['username'] = $_POST['user'];
   $_SESSION['password'] = $md5pass;

   /**
    * This is the cool part: the user has requested that we remember that
    * he's logged in, so we set two cookies. One to hold his username,
    * and one to hold his md5 encrypted password. We set them both to
    * expire in 100 days. Now, next time he comes to our site, we will
    * log him in automatically.
    */
   if(isset($_POST['remember'])){
      setcookie("tyo_cookname", $_SESSION['username'], time()+60*60*24*100, "/");
      setcookie("tyo_cookpass", $_SESSION['password'], time()+60*60*24*100, "/");
   }

   /* Quick self-redirect to avoid resending data on refresh */
   echo "<meta http-equiv=\"Refresh\" content=\"0;url=$HTTP_SERVER_VARS[PHP_SELF]\">";
   return;
}

/* Sets the value of the logged_in variable, which can be used in your code */
$logged_in = checkLogin();
?>
