<?php
function InsertPlayerScores($Players){
	include ('../config/connection.php');
	
	// prepare and bind
	$Update_sql =
	"UPDATE score SET
	RunScored=?,
	SixHit=?,
	FourHit=?,
	Duck=?,
	BallFaced=?,
	BallsBowled=?,
	Wkt=?,
	MaidenOver=?,
	RunsConceded=?,
	Catches=?,
	Stumps=?,
	RunOut=?,
	ManofMatch=?,
	PlayerScore=?
	WHERE PlayerId=?";
	
	$stmt = $dbc->prepare($Update_sql);
	
	foreach ($Players as $MyPlayer) {
		#Evaluate Player Score
		$Player_score = $MyPlayer->getRunsScored() * 2 + $MyPlayer->getPlayerScore();
			
		$stmt->bind_param(
				"ddddddddddddddd",
			 	$MyPlayer->getRunsScored(),
				$MyPlayer->getSixHit(),
				$MyPlayer->getFourHit(),
				$MyPlayer->getDuck(),
				$MyPlayer->getBallFaced(),
				$MyPlayer->getBallsBowled(),
				$MyPlayer->getWkt(),
				$MyPlayer->getMaidenOver(),
				$MyPlayer->getRunsConceded(),
				$MyPlayer->getCatches(),
				$MyPlayer->getStumps(),
				$MyPlayer->getRunOut(),
				$MyPlayer->getManofMatch(),
				$Player_score,
			    $MyPlayer->getPlayerId()
				);
		$stmt->execute();
		if ($stmt->errno) {
			echo "FAILURE!!! " . $stmt->error;
		}
		else echo "Updated {$stmt->affected_rows} rows";
	}
}

function getTeamPlayers($Team){
	include ('/PlayerObject.php');
	include ('../config/connection.php');
	$sql = "SELECT id, Player_Name, Team, Role, Price, Category FROM players where Team = '" .$Team ."'";
	$result = mysqli_query($dbc,$sql);
	$TeamPlayers = array();
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$myTeamPlayer = new Player();
			$myTeamPlayer->setPlayerId($row["id"]);
			$myTeamPlayer->setPlayerName($row["Player_Name"]);
			$myTeamPlayer->setTeam($row["Team"]);
			$myTeamPlayer->setRole($row["Role"]);
			$myTeamPlayer->setPrice($row["Price"]);
			$myTeamPlayer->setCategory($row["Category"]);
			array_push($TeamPlayers,$myTeamPlayer);
		}
	} else {
		echo "0 results";
	}
	return $TeamPlayers;
}
?>