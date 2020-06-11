<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/scheduleModel.php");

class Schedules extends Model {
	private $Schedules;
	function __construct() {
		$this->fillArray();
	}

	function fillArray() {
		$this->Schedules = array();
		$this->db = $this->connect();
		$result = $this->readSchedules();
		
		while ($row = $result->fetch_assoc()) {
			array_push($this->Schedules, new Schedule($row["Sch_id"],$row["Days"],$row["App_Date"]));
		}
	}

	function getSchedules() {
		return $this->Schedules;
	}

	function readSchedules(){
		$sql = "SELECT * FROM schedule";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

	function showSchedule()
{
	$sql='SELECT schedule.Days, schedule.App_Date,Day_limit.App_time,clinics.Cname
	
		 from Day_limit,schedule,clinics 
		 where schedule.Sch_id=Day_Limit.Sch_id AND clinics.CID=Day_limit.CID
		';
		 
		 $result=$this->db->query($sql);
	
	if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	
		
} 





}
?>