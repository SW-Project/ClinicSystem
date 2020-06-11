<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/AppointModel.php");

class Appointments extends Model {
	private $Appointments;
	function __construct() {
		$this->fillArray();
	}

	function fillArray() {
		$this->Appointments = array();
		$this->db = $this->connect();
		$result = $this->readAppointments();
		
		while ($row = $result->fetch_assoc()) {
			array_push($this->Appointments, new Appointment($row["appointment_id"],$row["PID"],$row["Day_id"],$row["reasons"],$row["Pay_type"]));
		}
		
	}

	function getAppointments() {
		return $this->Appointments;
	}

	function readAppointments(){
		$sql = "SELECT * FROM appointments";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}
	function type($Day_ID)
	{
	   $sql="SELECT app_type_id where Day_id=$Day_ID";
	   $result = $this->db->query($sql);
	   if ($result->num_rows > 0){
		return $result;
	}
	   
	}
	
  	function  AddAppointmnet($PID,$Day_ID,$Reasons,$Payment){
	$sql="Select * from appointments where PID=$PID";

	$more=$this->db->query($sql);
	if($more->num_rows > 0)
	{
		echo "<script>$(document).ready(function(){ $('#myModal').modal('show'); });</script>
	
		<div class='modal'  id='myModal' name='myModal' role='dialog'>
			<div class='modal-dialog modal-confirm'>
			  <div class='modal-content'>
			  <div class='modal-header'>
		  <img src='http://localhost/SW/lib/images/failure.png' style='position: absolute; margin: 0 auto;left: 0;right: 0;
		   top: -40px;width: 95px;height: 95px;border-radius: 50%;background: transparet;padding: 20px;text-align: center;'>
			<h5 style='text-align: center;'>Failed</h5>
			</div>
				<div class='modal-body'>
				  <p>An Wrong Input Or Exceeded Number of Booking ... Thank You</p>
				</div>
					<div class='modal-footer'>

							<button type='button' class='btn btn-danger' data-dismiss='modal' onclick='myFunction()'>Back</button>
										<script>
										function myFunction()
										{
										  location.href='http://localhost/SW/Public/Booking.php';
										}
										</script>
					</div>
				</div>
			</div>
		</div>";

	}
	else{
		$sql="INSERT INTO `appointments`(`appointment_id`, `PID`, `Day_id`, `reasons`,`Pay_type`) 
	VALUES (DEFAULT,'$PID','$Day_ID','$Reasons','$Payment')";
	$sql2="UPDATE `Day_Limit` SET `status`='BOOKED'  WHERE Day_id='$Day_ID'";

	if ($this->db->query($sql)=== TRUE && $this->db->query($sql2) === TRUE){
	
		echo "<script>$(document).ready(function(){ $('#myModal').modal('show'); });</script>

		<div class='modal'  id='myModal' name='myModal' role='dialog'>
			<div class='modal-dialog modal-confirm'>
			  <div class='modal-content'>
			  <div class='modal-header'>
		  <img src='http://localhost/SW/lib/images/Success.png' style='position: absolute; margin: 0 auto;left: 0;right: 0;
		   top: -40px;width: 95px;height: 95px;border-radius: 50%;background: transparet;padding: 20px;text-align: center;'>
			<h5 style='text-align: center;'>Success</h5>
			</div>
				<div class='modal-body'>
				  <p> Booking Completed </p>
				</div>
					<div class='modal-footer'>

							<button type='button' class='btn btn-success' data-dismiss='modal' onclick='myFunction()'>Done</button>
										<script>
										function myFunction()
										{
										  location.href='http://localhost/SW/Public/ShowApp.php';
										}
										</script>
					</div>
				</div>
			</div>
		</div>";
	}

	}
	}
	function showAll()
	{
		
		$sql="Select appointments.appointment_id,appointments.PID,schedule.Days,clinics.CID,schedule.App_Date,Day_limit.App_time,appointments.reasons ,Pay_type.Description , clinics.Cname
		from appointments,schedule,Day_limit,Pay_type,clinics
		WHERE Day_limit.Day_id=Day_Limit.Day_id 
		AND Day_limit.Sch_id=schedule.Sch_id
		AND Day_limit.CID=clinics.CID 
		AND appointments.Day_id=Day_Limit.Day_id 
		AND appointments.Pay_type=Pay_type.Pay_type_id
		Order By appointments.appointment_id";
			 $result=$this->db->query($sql);
		
		if ($result->num_rows > 0){
				return $result;
			}
			else {
				return false;
			}
		
			
	} 
function showAppointments()
{
	$date=date("Y-m-d");
	
	$sql="Select appointments.appointment_id,appointments.PID,schedule.Days,clinics.CID,schedule.App_Date,Day_limit.App_time,appointments.reasons ,Pay_type.Description , clinics.Cname
	from appointments,schedule,Day_limit,Pay_type,clinics
	WHERE Day_limit.Day_id=Day_Limit.Day_id 
	AND schedule.App_Date='".$date."'
	AND Day_limit.Sch_id=schedule.Sch_id
	AND Day_limit.CID=clinics.CID 
	AND appointments.Day_id=Day_Limit.Day_id 
	AND appointments.Pay_type=Pay_type.Pay_type_id
	Order By appointments.appointment_id";
		 $result=$this->db->query($sql);
	
	if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	
		
} 


}
