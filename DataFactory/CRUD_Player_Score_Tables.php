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
?>