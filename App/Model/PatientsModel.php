<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/PatientModel.php");

class Patients extends Model {
	private $Patients;
	function __construct() {
		$this->fillArray();
	}

	function fillArray() {
		$this->Patients = array();
		$this->db = $this->connect();
		$result = $this->readPatients();
		
		while ($row = $result->fetch_assoc()) {
			array_push($this->Patients, new Patient($row["PID"],$row["Fname"],$row["Mname"],$row["Lname"],$row["username"],$row["gender"],$row["mobile"],$row["email"],$row["pass"],$row["BirthDay"],
      $row["BirthMonth"],$row["BirthYear"]));
		}
	}

	function getPatients() {
		return $this->Patients;
	}

	function readPatients(){
		$sql = "SELECT * FROM Patients";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

  function RegPatients($Fname,$Mname,$Lname,$Uname,$gender,$mobile,$email,$password,$Day,$Month,$Year){
	$sql = "INSERT INTO Patients (PID, Fname, Mname, Lname, username,gender,mobile,email,pass,BirthDay,BirthMonth, BirthYear )
    VALUES (DEFAULT,'$Fname','$Mname','$Lname','$Uname','$gender','$mobile','$email','$password','$Day','$Month','$Year')";

		if($this->db->query($sql) === true){
			
		     $this->fillArray();
		}
	
		else{
			echo "ERROR: Could not able to execute $sql. " ;
		}
	}
	
	
   



}
