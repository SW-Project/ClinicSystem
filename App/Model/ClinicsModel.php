<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/PatientModel.php");

class Clinics extends Model {
	private $Clinics;
	function __construct() {
		$this->fillArray();
	}

	function fillArray() {
		$this->Clinics = array();
		$this->db = $this->connect();
		$result = $this->readClinics();
		
		while ($row = $result->fetch_assoc()) {
			array_push($this->Clinics, new Clinic($row["CID"],$row["Cname"],$row["address"],$row["location"]));
		}
	}

	function getClinics() {
		return $this->Clinics;
	}

	function readClinics(){
		$sql = "SELECT * FROM clinics";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

  function AddClinic($Cname,$address,$location){
	$sql = "INSERT INTO clinics(`CID`, `Cname`, `address`, `location`)
    VALUES (DEFAULT,'$Cname','$address','$location')";

		if($this->db->query($sql) === true){
			
		     $this->fillArray();
		}
	
		else{
			echo "ERROR: Could not able to execute $sql. " ;
		}
	}
	
	
   



}
