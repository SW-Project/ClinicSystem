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
		$sql = "SELECT * FROM patients";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}
	function checkUname(){
		$sql = "SELECT username FROM patients";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			$name_error = "Sorry... username already taken"; 	
		}
		else {
			return false;
		}
	}

  function RegPatients($Fname,$Mname,$Lname,$Uname,$gender,$mobile,$email,$password,$Day,$Month,$Year){

	$sql = "INSERT INTO patients (PID, Fname, Mname, Lname, username,gender,mobile,email,pass,BirthDay,BirthMonth, BirthYear )
    VALUES (DEFAULT,'$Fname','$Mname','$Lname','$Uname','$gender','$mobile','$email','$password','$Day','$Month','$Year')";

		if($this->db->query($sql) === true){
			
			 $this->fillArray();
			 
		     $sql = "SELECT * FROM patients WHERE PID IN (SELECT PID FROM patients WHERE PID = (SELECT MAX(PID) FROM patients)) ORDER BY PID DESC LIMIT 1";
	   $result = $this->db->query($sql);
	if ($result->num_rows == 1){
		$row = $this->db->fetchRow();
		session_start();
		$_SESSION["PID"]=$row["PID"];
		$_SESSION["username"]=$row["username"];
		echo "<script>$(document).ready(function(){ $('#myModal').modal('show'); });</script>

         <div class='modal'  id='myModal' role='dialog'>
             <div class='modal-dialog modal-confirm'>
               <div class='modal-content'>
               <div class='modal-header'>
           <img src='http://localhost/SW/lib/images/Success.png' style='position: absolute; margin: 0 auto;left: 0;right: 0;
            top: -40px;width: 95px;height: 95px;border-radius: 50%;background: transparet;padding: 20px;text-align: center;'>
             <h5 style='text-align: center;'>Sucess</h5>
             </div>
                 <div class='modal-body'>
                   <p>Your registration is done ,One more step to go </p>
                 </div>
                     <div class='modal-footer'>

                             <button type='button' class='btn btn-success' data-dismiss='modal' onclick='myFunction()'>Next</button>
                                         <script>
                                         function myFunction()
                                         {
                                           location.href='http://localhost/SW/Public/Complete.php';
                                         }
                                         </script>
                     </div>
                 </div>
             </div>
		 </div>";
		 
		}
	
		else{
			echo "<script>$(document).ready(function(){ $('#myModal').modal('show'); });</script>

		<div class='modal'  id='myModal' role='dialog'>
			<div class='modal-dialog modal-confirm'>
			  <div class='modal-content'>
			  <div class='modal-header'>
		  <img src='http://localhost/SW/lib/images/failure.png' style='position: absolute; margin: 0 auto;left: 0;right: 0;
		   top: -40px;width: 95px;height: 95px;border-radius: 50%;background: transparet;padding: 20px;text-align: center;'>
			<h5 style='text-align: center;'>Failed</h5>
			</div>
				<div class='modal-body'>
				  <p>Sorry an error occurred, Pleae try again ... Thank You</p>
				</div>
					<div class='modal-footer'>

							<button type='button' class='btn btn-danger' data-dismiss='modal' onclick='myFunction()'>Back</button>
										<script>
										function myFunction()
										{
										  location.href='http://localhost/SW/Public/register.php';
										}
										</script>
					</div>
				</div>
			</div>
		</div>";
			
		}
	}
}
}
?>
	
	
   

