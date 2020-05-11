<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/ReportModel.php");
require_once("include/Config.php");

class ReportsModel extends Model {
	private $Report;
	function __construct() {
		$this->fillArray();
	}

	function fillArray() {
		$this->Report = array();
		$this->db = $this->connect();
		$result = $this->readreport();
		while ($row = $result->fetch_assoc()) {
			array_push($this->staff, new ReportModel($row["PID"],$row["RDate"],$row["ReportType"],$row["Comments"],$row["Uploads"]));
		}
	}

	function getreport() {
		return $this->staff;
	}

	function readreport(){
		$sql = "SELECT * FROM Reports";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

	function insertreports($PID,$RDate,$ReportType,$Comments,$Uploads){
		$sql = "INSERT INTO Reports (PID,RDate,ReportType,Comments,Uploads) VALUES ('$PID','$RDate','$ReportType','$Comments','$Uploads')";
		if($this->db->query($sql) === true){
			echo "Records inserted successfully.";
			$this->fillArray();
		} 
		else{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
    

    
    
}
?>

