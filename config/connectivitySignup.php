<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'fantasy');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db = mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());
function NewUser() { $fullname = $_POST['name'];
	$userName = $_POST['user'];
	$email = $_POST['email'];
	$password = sha1($_POST['pass']);
	$query = "INSERT INTO users (username,email,password,user_team) VALUES ('$userName','$email','$password','0')";
	$data = mysql_query($query) or die(mysql_error());
	if ($data) { echo "YOUR REGISTRATION IS COMPLETED...";
		header('Location: /MySportsFantasy/login.php');
	}
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

