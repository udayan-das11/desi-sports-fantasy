<?php
# Start Session 

session_start();

unset($_SESSION['username']); //Delete the username key 
session_unset();
    $_SESSION['FBID'] = NULL;
    $_SESSION['FULLNAME'] = NULL;
    $_SESSION['EMAIL'] =  NULL;
// session_destroy(); // Will delete all the keys 

header('Location: login.php'); // Rediect to login.php 

?>