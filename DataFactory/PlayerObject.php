<?php
	class Player {
		#for Score Table
		private $PlayerId;
		private $RunsScored;
		private $SixHit;
		private $FourHit;
		private $Duck;
		private $BallFaced;
		private $BallsBowled;
		private $Wkt;
		private $MaidenOver;
		private $RunsConceded;
		private $Catches;
		private $Stumps;
		private $RunOut;
		private $ManOfMatch;
		private $PlayerScore;
		
		#For Player Table
		private $PlayerName;
		private $Team;
		private $Role;
		private $Price;
		private $Category;
		
		public function getPlayerId() {
			return $this->PlayerId;
		}
		
		function setPlayerId($PlayerId) {
			$this->PlayerId  = $PlayerId;
		}
		
		public function getRunsScored() {
			return $this->RunsScored;
		}
		
		public function setRunsScored($RunsScored) {
			$this->RunsScored = $RunsScored;
		}
		
		public function getSixHit() {
			return $this->SixHit;
		}
		
		public function setSixHit($SixHit) {
			$this->SixHit = $SixHit;
		}
		
		public function getFourHit() {
			return $this->FourHit;
		}
		
		public function setFourHit($FourHit) {
			$this->FourHit = $FourHit;
		}
		
		public function getDuck() {
			return $this->Duck;
		}
		
		public function setDuck($Duck) {
			$this->Duck = $Duck;
		}
		
		public function getBallFaced() {
			return $this->BallFaced;
		}
		
		public function setBallFaced($BallFaced) {
			$this->BallFaced = $BallFaced;
		}
		
		public function getBallsBowled() {
			return $this->BallsBowled;
		}
		
		public function setBallsBowled($BallsBowled) {
			$this->BallsBowled = $BallsBowled;
		}
		
		public function getWkt() {
			return $this->Wkt;
		}
		
		public function setWkt($Wkt) {
			$this->Wkt = $Wkt;
		}
		
		public function getMaidenOver() {
			return $this->MaidenOver;
		}
		
		public function setMaidenOver($MaidenOver) {
			$this->MaidenOver = $MaidenOver;
		}
		
		public function getRunsConceded() {
			return $this->RunsConceded;
		}
		
		public function setRunsConceded($RunsConceded) {
			$this->RunsConceded = $RunsConceded;
		}
		
		public function getCatches() {
			return $this->Catches;
		}
		
		public function setCatches($Catches) {
			$this->Catches = $Catches;
		}
		
		public function getStumps() {
			return $this->Stumps;
		}
		
		public function setStumps($Stumps) {
			$this->Stumps = $Stumps;
		}
		
		public function getRunOut() {
			return $this->RunOut;
		}
		
		public function setRunOut($RunOut) {
			$this->RunOut = $RunOut;
		}
		
		public function getManOfMatch() {
			return $this->ManOfMatch;
		}
		
		public function setManOfMatch($ManOfMatch) {
			$this->ManOfMatch = $ManOfMatch;
		}
	
		public function getPlayerScore() {
			return $this->PlayerScore;
		}
		
		public function setPlayerScore($PlayerScore) {
			$this->PlayerScore = $PlayerScore;
		}
		
		public function getPlayerName() {
			return $this->PlayerName;
		}
		
		public function setPlayerName($PlayerName) {
			$this->PlayerName = $PlayerName;
		}
		
		public function getTeam() {
			return $this->Team;
		}
		
		public function setTeam($Team) {
			$this->Team = $Team;
		}
		
		public function getRole() {
			return $this->Role;
		}
		
		public function setRole($Role) {
			$this->Role = $Role;
		}
		
		public function getPrice() {
			return $this->Price;
		}
		
		public function setPrice($Price) {
			$this->Price = $Price;
		}
		public function getCategory() {
			return $this->Category;
		}
		
		public function setCategory($Category) {
			$this->Category = $Category;
		}
	}

?>