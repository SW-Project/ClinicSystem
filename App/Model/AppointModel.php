<?php
require_once(__ROOT__ . "model/Model.php");
class Appointment extends Model {
    private $id;
    private $PID;
  	private $Day;
    private $Reasons;
    private $Payment;
    function __construct($id,$PID="",$Day="",$Reasons="",$Payment="") {
      $this->id = $id;
 	    $this->db = $this->connect();

     if(""===$id){
       $this->readApp($id);
     }else{
       $this->$id = $id;
       $this->$PID = $PID;
 	    $this->$Day=$Day;
       $this->$Reasons = $Reasons;
       $this->$Payment = $Payment;

     }
   }
   function getPID() {
    return $this->PID;
  }
  function setPID($PID) {
    return $this->PID = $_SESSION['PID'];
  }
  function getDay() {
   return $this->Day;
  }
  function setDay($Day) {
   return $this->Day = $Day;
  }
  function getReasons() {
    return $this->Reasons;
    }
    function setReasons($Reasons) {
    return $this->Reasons = $Reasons;
    }
  function getPayment() {
  return $this->Payment;
  }
  function setPayment($Payment) {
  return $this->Payment = $Payment;
  }
  

  function readApp($id){
      $sql ="SELECT * FROM `appointments` where appointment_id=".$id;
      $db = $this->connect();
      $result = $db->query($sql);
      if ($result->num_rows == 1){
          $row = $db->fetchRow();
      $this->PID = $_SESSION["PID"];
      $this->Day = $row["Day_id"];
		  $this->Reasons = $row["reasons"];
		  $this->Payment = $row["Pay_type"];
          
      }
      else {
          $this->PID = "";
          $this->Day = "";
          $this->Reasons = "";
          $this->Payment = "";
      }
    }
    
  function show_Appointment($PID)
{
  $sql=" Select appointments.appointment_id,appointments.PID,schedule.Days,clinics.CID,schedule.App_Date,Day_limit.App_time,appointments.reasons ,Pay_type.Description , clinics.Cname
          from appointments,schedule,Day_limit,Pay_type,clinics
          WHERE  appointments.PID=$PID
          AND Day_limit.Day_id=Day_Limit.Day_id 
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

function show_Appointment_PDF($ID)
{
  $sql="Select appointments.appointment_id,appointments.PID,schedule.Days,clinics.Cname,schedule.App_Date,Day_limit.App_time,appointments.reasons ,Pay_type.Description,Patients.Fname,Patients.Mname,Patients.Lname,Patients.mobile
  from appointments,Day_limit,schedule,Pay_type,clinics,Patients
  where appointment_id='".$ID."'
  AND Patients.PID=appointments.PID
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
function Delete($app_id)
{
$sql="DELETE FROM `appointments` WHERE appointment_id='$app_id'";
$sql2="UPDATE `Day_Limit` SET `status`='' WHERE appointment_id='$app_id' ";
if($this->db->query($sql) === TRUE && $this->db->query($sql2) === TRUE){
return true;
}
else
return false;

}

  }
?>

