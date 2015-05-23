<?php
	class Match {
		#for Score Table
		private $MatchId;
		private $Team1;
		private $Team2;
		private $Date;
		
		public function setMatchId($MatchId) {
			$this->MatchId = $MatchId;
		}
		
		public function getMatchId() {
			return $this->MatchId;
		}
		
		public function getTeam1() {
			return $this->Team1;
		}
		
		public function setTeam1($Team1) {
			$this->Team1 = $Team1;
		}
		
		public function getTeam2() {
			return $this->Team2;
		}
		
		public function setTeam2($Team2) {
			$this->Team2 = $Team2;
		}
		
		public function getDate() {
			return $this->Date;
		}
		
		public function setDate($Date) {
			$this->Date = $Date;
		}
		
	}

?>