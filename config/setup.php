<?php
// set up file
session_start();
 # Database Connection :
 include('config/connection.php');
 # Constants:
 
 DEFINE('D_TEMPLATE','template');
 // Functions:
 
 include('functions/data.php');
 include('functions/template.php');
$site_title='MySportsFantasy';
$user =data_user($dbc,$_SESSION['username']);
#Site Setup :

//$debug = data_setting_value($dbc,'debug-status' );



?>