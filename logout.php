<?php
# Start Session 

session_start();

unset($_SESSION['username']); //Delete the username key 

// session_destroy(); // Will delete all the keys 

header('Location: login.php'); // Rediect to login.php 

?>