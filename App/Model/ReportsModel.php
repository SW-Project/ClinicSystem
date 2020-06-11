<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/ReportModel.php");


class Reports extends Model {
	private $Reports;
	function __construct() {
		$this->fillArray();
	}

	function fillArray() {
		$this->Reports = array();
		$this->db = $this->connect();
		$result = $this->readreports();
        
   while ($row = $result->fetch_assoc()) {
			array_push($this->Reports, new Report($row["Report_id"],$row["PID"],$row["RDate"],$row["ReportType_id"],$row["medical_diag"],$row["Results"],$row["pat_practice"],$row["Comments"]));
		}
	}

	function getreports() {
		return $this->Reports;
	}

	function readreports(){
		$sql = "SELECT * FROM reports";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

	function insertreports($PID,$RDate,$ReportType_id,$medical_diag,$Results,$pat_practice,$Comments){
		$sql = "INSERT INTO `reports` (`Report_id`,`PID`,`RDate`,`ReportType_id`,`medical_diag`,`Results`,`pat_practice`,`Comments`) VALUES (DEFAULT,'$PID','$RDate','$ReportType_id','$medical_diag','$Results','$pat_practice',
        '$Comments')";
        
        
		if($this->db->query($sql) === true){
			
			$this->fillArray();
		} 
		else{
			echo "ERROR: Could not able to execute $sql. ";
		}
	}
    
function showall()
{
    $sql="SELECT reports.Report_id,reports.PID,reports_types.Description,reports.RDate,reports.medical_diag,reports.Results,reports.pat_practice,reports.Comments
    from reports,reports_types
    WHERE reports.ReportType_id=reports_types.ReportType_id
    Order By reports.Report_id";
    $result=$this->db->query($sql);
    if($result->num_rows >0){
        return $result;
    }
    else
    {
        return false;
    }
    }

    function showAllreports(){
    	 $sql="SELECT reports.Report_id,reports.PID,reports_types.Description,reports.RDate,reports.medical_diag,reports.Results,reports.pat_practice,reports.Comments
    from reports,reports_types
    WHERE reports.ReportType_id=reports_types.ReportType_id";
    $result=$this->db->query($sql);
    if($result->num_rows >0){
        return $result;
    }
    else
    {
        return false;
    }
    }

    
    
    function showreports()
    {
        
        $date=date("Y-m-d");
        $sql="Select
            
          reports.Report_id,reports.PID,reports.medical_diag,reports.Results,reports.pat_practice,reports.Comments,reports_types.Description
          from reports,reports_types
          WHERE reports.Report_id=reports_types.ReportType_id
          AND reports.RDate='".$date."'
          Order By reports.reports.Report_id";
        
        $result=$this->db->query($sql);
        if($result->num_rows >0)
        {
            return $result;
        }
        else{
            return false;
        }
        
    }
}
    
    

?>

