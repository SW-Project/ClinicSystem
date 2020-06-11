<?php
  require_once(__ROOT__ . "model/Model.php");

class Report extends Model {
    
    private $Report_id;
    private $PID;
	private $RDate;
    private $ReportType_id;
    private $medical_diag;
    private $Results;
    private $pat_practice;
    private $Comments;
	
    
    
    
     function __construct($Report_id="",$PID="",$RDate="",$ReportType_id="",$medical_diag="",$Results="",$pat_practice="",$Comments="")
     {
         
         
    $this->Report_id = $Report_id;
	    $this->db = $this->connect();

    if(""===$PID){
      $this->readreports($Report_id);
    }else{
      
      $this->PID= $PID;
      $this->RDate=$RDate;
      $this->ReportType_id = $ReportType_id;
      $this->medical_diag = $medical_diag;
      $this->Results = $pat_practice;
	  $this->Comments=$Comments;
      
      
        
        
        
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
    function getReportTypeID() {
    return $this->ReportType_id;
  }
  function setReportTypeID($ReportType_id) {
    return $this->ReportType_id = $ReportType_id;
  }
    function getmedical_diag(){
        return $this->medical_diag;
    }
    function setmedical_diag($medical_diag){
        return $this->medical_diag=$medical_diag;
    }
    function getResults() {
    return $this->Results;
  }
   function setResults($Results) {
    return $this->Results = $Results;
  }
    function getpat_practice() {
    return $this->pat_practice;
  }
   function setpat_practice($pat_practice) {
    return $this->pat_practice= $pat_practice;
  }
    function getComments() {
    return $this->Comments;
  }
  function setComments($Comments) {
    return $this->Comments = $Comments;
  }
  
    
    
  
  function getReport_id() {
    return $this->Report_id;
  }

    function readreports($Report_id){
    $sql = "SELECT * FROM reports where Report_id=".$Report_id;
    $db = $this->connect();
    $result = $db->query($sql);
        
    if ($result->num_rows == 1){
      $row = $db->fetchRow();
      $this->Report_id=$row["Report_id"];
      $this->PID=$row["PID"];
      $this->RDate= $row["RDate"];
      $this->ReportType_id=$row["ReportType_id"];
      $this->medical_diag=$row["medical_diag"];
      $this->Results=$row["Results"];
      $this->pat_practice=$row["pat_practice"];
      $this->Comments= $row["Comments"];
	  
      
        
    }
    else {
      $this->PID="";
      $this->RDate="";
      $this->ReportType_id="";
      $this->medical_diag="";
      $this->Results="";
      $this->pat_practice="";
      $this->Comments = "";
	  
      
    }
  }
   
    function editReport($RDate,$ReportType_id,$medical_diag,$Results,$pat_practice,$Comments){
      $sql = "UPDATE reports set RDate='$RDate',ReportType_id='$ReportType_id',medical_diag='$medical_diag',Results='$Results',
      pat_practice='$pat_practice',Comments='$Comments' where Report_id=$this->Report_id;";
        
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readreports($this->Report_id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }

  }
    function deleteReport(){
		$sql="delete from reports where Report_id=$this->Report_id;";
		if($this->db->query($sql) === true){
			echo "deleted successfully.";
		} else{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
    
    function show_Report($PID)
    {
        $sql="Select reports.Report_id,reports.PID,reports.RDate,reports.ReportType_id,reports.medical_diag,reports.Results,reports.pat_practice,reports.Comments,reports_types.Description,patients.Fname,patients.Mname,Patients.Lname,Patients.mobile
        from reports,reports_types
        WHERE reports.PID=$PID
        AND reports.ReportType_id=reports_types.ReportType_id
        
        Order by reports.Report_id";
        $result=$this->db->query($sql);
        
        if($result->num_rows >0){
              return $result;
        }
        else{
            return false;
        }
        }
    function show_report_PDF($ID)
    {
        
        $sql="Select
        reports.Report_id,reports.PID,reports.RDate,reports.medical_diag,reports.Results,report.pat_practice,report.Comments,reports_types.Description,patients.Fname,patients.Mname,patients.Lname,patients.mobile
        from reports,reports_types,patients
        where Report_id='".$ID."'
        AND patients.PID=reports.PID
        AND reports.ReportType_id=reports_types.ReportType_id
        Order By reports.Report_id";
        
        $result=$this->db->query($sql);
        if($result->num_rows >0)
        {
            return $result;
            
        }
        else
        {
            return false;
        }
    }
    }

  

?>