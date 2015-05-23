<?php

function InsertMatchDetails($MatchEval){
	include ('../config/connection.php');

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
	else echo "Updated {$statement->affected_rows} rows \n";
	
	
}

function InsertMatchHistoryDetails(){
	include ('../config/connection.php');
	#mysqli_report(MYSQLI_REPORT_ALL);	
	$result = mysqli_query($dbc,"SELECT MAX(MatchId) AS MaxMatchId FROM matches");
	
	$LastMatchId;
	if ($result->num_rows == 1) {
		while($row = $result->fetch_assoc()) {
			$LastMatchId = $row["MaxMatchId"];
		}
	}
	echo $LastMatchId. "\n";
	
	#Create match history table
	$Create_sql = "CREATE TABLE Match_H_" .$LastMatchId. "  (
					match_id INT(10) NOT NULL,
					user_id INT(10) NOT NULL,
					user_team VARCHAR(100),
					user_player_scores VARCHAR(200),
					user_score INT(10),
					PRIMARY KEY (match_id, user_id)
					)";
	
	
	$stmt = $dbc->prepare($Create_sql);
	$stmt->execute();
	
	#Insert User History Details for each user
	$user_result = mysqli_query($dbc,"SELECT user_id, user_team FROM users");
	
	if ($user_result->num_rows > 1) {
		while($row = $user_result->fetch_assoc()) {
			$UserId = $row["user_id"];
			$UserTeam = $row["user_team"];
			$UserPlayerIds = explode(';',$UserTeam);
			$UserPlayerScoresCol=0;
			$UserMatchScore=0;
			
			#evaluate values for columns- user_player_scores and user_score
			foreach ($UserPlayerIds as $MyPlayerId) {
				$PlayerScore;
				$result = mysqli_query($dbc,"SELECT PlayerScore  FROM score where PlayerId=" .$MyPlayerId);
				if ($result->num_rows == 1) {
					while($row = $result->fetch_assoc()) {
						$PlayerScore = $row["PlayerScore"];
						$UserPlayerScoresCol = $UserPlayerScoresCol .$MyPlayerId ."=" .$PlayerScore .";";
						$UserMatchScore = $UserMatchScore + $PlayerScore;
					}
				}
			}
			
			$Insert_sql = "INSERT INTO Match_H_" .$LastMatchId. " 
							(match_id, user_id, user_team, user_player_scores, user_score) 
							VALUES 
							(?, ?, ?, ?, ?)";
			
			$statement = $dbc->prepare($Insert_sql);
			
			$statement->bind_param(
					"ddssd",
					$LastMatchId,
					$UserId,
					$UserTeam,
					$UserPlayerScoresCol,
					$UserMatchScore
			);
			$statement->execute();
			if ($statement->errno) {
				echo "FAILURE!!! " . $statement->error;
			}
			else echo "Updated {$statement->affected_rows} rows \n";
			
		}
	}
	#mysqli_report(MYSQLI_REPORT_OFF);
	
}


?>
