<?php

function InsertMatchDetails($MatchEval){
	include ('../config/connection.php');
	mysqli_report(MYSQLI_REPORT_ALL);
	$Insert_sql = "INSERT INTO matches (Team1, Team2, Date) VALUES (?, ?, ?)";
	
	$statement = $dbc->prepare($Insert_sql);
	
	$statement->bind_param(
			"sss",
			$MatchEval->getTeam1(),
			$MatchEval->getTeam2(),
			$MatchEval->getDate()
			);
	$statement->execute();
	if ($statement->errno) {
		echo "FAILURE!!! " . $statement->error;
	}
	else echo "Updated {$statement->affected_rows} rows";
	$last_Match_id = mysql_insert_id();
	echo $last_Match_id;
	echo 'YSSSSSS';
	return $last_Match_id;
	mysqli_report(MYSQLI_REPORT_OFF);
}

function InsertMatchHistoryDetails($last_Match_id){
	include ('../config/connection.php');
	echo $last_Match_id;
	echo 'YOOO';
	#Create match history table
	$Create_sql = "CREATE Match_H_" .$last_Match_id. "  (
					match_id INT(10) NOT NULL PRIMARY KEY,
					user_id INT(10) NOT NULL PRIMARY KEY,
					user_team VARCHAR(100),
					user_score INT(10)
					)";
	$stmt = $dbc->prepare($Create_sql);
	$stmt->execute();
	
	#Insert User History Details
	echo'Done';
	
}


?>
