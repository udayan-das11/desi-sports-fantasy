<?php
include ('../config/connection.php');
#Sesion Variables

$_SESSION['username']

function setSessionVariables($my_player_username){
	include ('../config/connection.php');
	
	$sql = "SELECT player_id, runs_scored, score FROM score where player_id=" .$my_player_id;
	$result = mysqli_query($dbc,$sql);
	
	if ($result->num_rows == 1) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	$_SESSION['Player_Id'] = $row["player_id"];
	    	$runs_scored = $row["runs_scored"];
	    	$score = $row["score"];
	    	echo ' ';
	        echo "player_id: " . $Player_Id. " - runs_scored: " . $runs_scored. " -score : " . $score;
	        
	        $score=$score*2;
	        inertScoreTableById($PlayerId,$score);
	    }
	} else {
	    echo "0 results";
	}
}

function TestCrud(){
	echo 'Hello Test Crud';
}

function inertScoreTableById($my_player_id,$score){
	include ('../config/connection.php');
	echo 'Hello Test Crud inerting score: ' .$score;
	$sql = "update score set score=" .$score. " where player_id = " .$my_player_id;
	$result = mysqli_query($dbc,$sql);
	mysqli_commit($dbc);
	
}

function LoadScoreTableById($my_player_id){
	echo 'Hello Test Crud load';
	include ('../config/connection.php');

	$sql = "SELECT player_id, runs_scored, score FROM score where player_id=" .$my_player_id;
	$result = mysqli_query($dbc,$sql);
	return $result;

}


?>