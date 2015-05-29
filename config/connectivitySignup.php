<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'fantasy');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db = mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());
function NewUser() { 
	$userName = $_POST['user'];
	$email = $_POST['email'];
	$password = sha1($_POST['pass']);
	$query = "INSERT INTO users (username,email,password,user_team) VALUES ('$userName','$email','$password','0')";
	$data = mysql_query($query) or die(mysql_error());
	if ($data) { echo "YOUR REGISTRATION IS COMPLETED...";
		header('Location: ../../desi-sports-fantasy/login.php');
	}
}
function facebookUser($fullname,$email) {
    $password = generateRandomString(10);
	$query = mysql_query("SELECT * FROM users WHERE username = '$userName' AND email = '$email'") or die(mysql_error());
	if (mysql_num_rows($query) <= 0) { 
		echo '###';
		$query1 = "INSERT INTO users (username,email,password,user_team) VALUES ('$userName','$email','$password','0')";
		$data = mysql_query($query1) or die(mysql_error());
		return;
	}
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function SignUp() {
	$query = mysql_query("SELECT * FROM users WHERE username = '$_POST[user]' AND password = '$_POST[pass]'") or die(mysql_error());
	if (!$row = mysql_fetch_array($query) or die(mysql_error())) { NewUser();
	} else { echo "SORRY...YOU ARE ALREADY REGISTERED USER...";

	}
}

if (isset($_POST['submit'])) {
	SignUp();
}
?>

