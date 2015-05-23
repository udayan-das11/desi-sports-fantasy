<?php


#Session Variables


switch($_POST["functionname"]){
	case 'EvaluateScore':
		EvaluateScoreInit();
		break;
}

function Test(){
	include ('/CRUD_Player_Score_Tables.php');
	$TeamPlayers = getTeamPlayers("CSK");
	print_r($TeamPlayers);
}
function EvaluateScoreInit(){
	echo 'Inside PLAYER INIT ';
	include ('/PlayerObject.php');
	include ('/MatchObject.php');
	
	$Player1 = new Player();
	$Player1->setPlayerId(1);
	$Player1->setRunsScored(150);
	
	$Player2 = new Player();
	$Player2->setPlayerId(2);
	$Player2->setRunsScored(140);
	
	$Players = array($Player1,$Player2);
	
	$MatchEval = new Match();
	$MatchEval->setTeam1("RR");
	$MatchEval->setTeam2("CSK");
	
	#Syntax- 'Y-m-d h:m:s'
	$date="2013-05-01 16:30:00";
	$MatchEval->setDate($date);
	
	EvaluateMatchScore($Players,$MatchEval);
}

function EvaluateMatchScore($Players,$MatchEval) {
	include ('../config/connection.php');
	include ('/CRUD_Player_Score_Tables.php');
	include ('/CRUD_Match_Tables.php');
	
	InsertPlayerScores($Players);
	InsertMatchDetails($MatchEval);
	InsertMatchHistoryDetails();
}


?>