<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/day_limitModel.php");

class DayLimits extends Model{
  private $DayLimits;
  function __construct() {
		$this->fillArray();
	}
	function fillArray() {
		$this->DayLimits = array();
		$this->db = $this->connect();
		$result = $this->readDayLimit();
		
		while ($row = $result->fetch_assoc()) {
			array_push($this->DayLimits, new DayLimit($row["Day_id"],$row["app_type_id"],$row["CID"],$row["status"],$row["App_time"],$row["Sch_id"]));
		}
	}

	function getDaylimit() {
		return $this->DayLimits;
	}

	function readDayLimit(){
		$sql = "SELECT * FROM day_limit";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

	function showTimeTable1()
{
	$sql='SELECT clinics.CID, schedule.Days, day_limit.Day_id, day_limit.App_time FROM schedule INNER JOIN clinics INNER JOIN day_limit WHERE day_limit.CID=clinics.CID AND day_limit.Sch_id=schedule.Sch_id AND day_limit.CID=1

';
		 $result=$this->db->query($sql);
	
	if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	
		
} 

function showTimeTable2()
{
	$sql='SELECT clinics.CID, schedule.Days, day_limit.Day_id, day_limit.App_time FROM schedule INNER JOIN clinics INNER JOIN day_limit WHERE day_limit.CID=clinics.CID AND day_limit.Sch_id=schedule.Sch_id AND day_limit.CID=3

';
		 $result=$this->db->query($sql);
	
	if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	
		
} 


function AddTime($app_type_id,$CID,$App_time, $Sch_id){
	if(empty($app_type_id)){
		      echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
              echo "Please choose the appointment type!";
              echo '</div>';
              return;
	}
	if(empty($App_time)){
		      echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
              echo "Please fill in the time!";
              echo '</div>';
              return;
	}
	if(empty($Sch_id)){
		      echo '<div class="alert alert-danger" role="alert">';
              echo '<a href="Admin1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
              echo "Please choose a Date!";
              echo '</div>';
              return;
	}

    $sql = "INSERT INTO `day_limit` (`Day_id`,`app_type_id`, `CID`, `App_time`, `Sch_id`) VALUES ('DEFAULT', '$app_type_id', '$CID', '$App_time', '$Sch_id')"; 
 
	if($this->db->query($sql) === true){
			 echo '<div class="alert alert-success" role="alert">';
             echo '<a href="TimeView.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
             echo "<strong>time added successfully!</strong>";
             echo '</div>';
		     $this->fillArray();
		}
	
		else{
			echo "ERROR: not able to execute $sql. ";
		}
	}

   

}

?>