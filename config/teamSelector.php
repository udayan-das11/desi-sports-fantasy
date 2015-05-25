<?php
	include ('connectivitySignup.php');
	$myQuery = mysql_query("SELECT * FROM players where Team='$_POST[team]'") or die(mysql_error());
	$yourArray = array();
		$index = 0;
		while($row = mysql_fetch_array($myQuery))
		{
		     $yourArray[$index] = $row["Player_Name"]."|".$row["Team"]."|".$row["ID"]."|".$row["Role"]."|".$row["PRICE"];
		     $index++;
		}

	echo json_encode($yourArray);
	//echo  json_encode($mydata);
?>