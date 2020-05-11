<?php
  require_once(__ROOT__ . "model/Model.php");
?>

<?php
class UserModel extends Model {
    
    private $RID;
    private $PID;
	private $RDate;
    private $ReprtType;
    private $Comments;
	private $Uploads;
    
    
    
     function __construct($RID,$PID="",$RDate="",$ReportType="",$Comments="",$Uploads="")
    {
         
         
    $this->Report_id = $RID;
	    $this->db = $this->connect();

    if(""===$PID){
      $this->readUser($PID);
    }else{
      $this->Report_id=$RID;
      $this->PID= $PID;
      $this->RDate=$RDate;
      $this->ReportType = $ReportType;
	  $this->Comments=$Comments;
      $this->Uploads = $Uploads;
      
        
        
        
    }
  }
    
    function getPID() {
    return $this->PID;
  }
  function setPID($PID) {
    return $this->PID = $PID;
  }
    function getRDate() {
    return $this->RDate;
  }
  function setRDate($RDate) {
    return $this->RDate = $RDate;
  }
    function getReportType() {
    return $this->ReportType;
  }
  function setusername($ReportType) {
    return $this->ReportType = $ReportType;
  }
    function getComments() {
    return $this->Comments;
  }
  function setComments($Comments) {
    return $this->Comments = $Comments;
  }
  
    function getUploads() {
    return $this->Uploads;
  }
  function setUploads($Uploads) {
    return $this->Uploads = $Uploads;
  }
    
  
  function getRID() {
    return $this->Report_id;
  }

    function readreport($RID){
    $sql = "SELECT * FROM Reports where Report_id=".$RID;
    $db = $this->connect();
    $result = $db->query($sql);
    if ($result->num_rows == 1){
      $row = $db->fetchRow();
      $this->PID=$row["PID"];
      $this->RDate= $row["RDate"];
      $this->ReportType=$row["ReportType"];
      $this->Comments = $row["Comments"];
	  $this->Uploads=$row["Uploads"];
      
        
    }
    else {
      $this->PID="";
      $this->RDate="";
      $this->ReportType="";
      $this->Comments = "";
	  $this->Uploads="";
      
    }
  }
   
    function editReport($PID,$RDate,$ReportType,$Comments,$Uploads){
      $sql = "update Reports set PID='$PID',RDate='$RDate',ReportType='$ReportType',Comments='$Comments',Uploads='$Uploads',
      
      where RID=$this->Report_id;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readUser($this->Report_id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }

  }
    function deleteReport(){
		$sql="delete from Reports where RID=$this->Report_id;";
		if($this->db->query($sql) === true){
			echo "deleted successfully.";
		} else{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
    
    
}
  

?>