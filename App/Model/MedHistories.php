<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/MedHistory.php");

class Histories extends Model {
	private $Histories;
	function __construct() {
		$this->fillArray();
	}

	function fillArray() {
		$this->Histories = array();
		$this->db = $this->connect();
		$result = $this->readHistories();
		
		while ($row = $result->fetch_assoc()) {
			array_push($this->Histories, new History($row["PID"],$row["height"],$row["weight"],$row["allergies"],$row["Medications"],$row["p_illnesses"]));
		}
	}

	function getHistories() {
		return $this->Histories;
	}

	function readHistories(){
		$sql = "SELECT * FROM History";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

	
}
